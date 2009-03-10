<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("manager", $sAction);		//权限检查

$tpl->assign("PAGE_FUNC_BIG_LINK", "manager.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "用户管理");

$manager = new manager();

//管理员列表
if($sAction == "listAll")
{
	$sWhere = isset($_GET["status"]) ? " a.status = '".$_GET["status"]."'" : "1";
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT a.id FROM manager a WHERE {$sWhere}");
			
	$sSQL = "SELECT a.id, a.userName, a.trueName, a.email,a.lastTime,a.lastIP,a.status, b.name AS roleName FROM `manager` a LEFT JOIN `role` b ON a.roleID=b.id WHERE {$sWhere} ORDER BY a.id DESC LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("manager.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "管理员列表");
	$tpl->display("admin/manager_listAll.tpl.htm");
}
//添加管理员 
elseif($sAction == "add")
{
	$tpl->assign("aStatus", array("0"=>"关闭","1"=>"开启","2"=>"冻结"));
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	//转化为另外的数组
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//选择所有的领导，字段isManager区分是否是领导
	/*$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"非领导","1"=>"领导"));
	
	//选出所有的功能列表
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//得到ID组合
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//针对每个角色进行处理，选择出这个角色所不具有的功能列表
	$sDiffArray = "";	//定义sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//得到两个数组，一个是全部的数组，一个是本角色的数组，然后计算着两个数组的差集
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//重新排序一下，这里必须要，否则$aTemp[$j]得不到值
		for ($j=0 ; $j <count($aTemp); $j++)
		{
			$aRoleList[$i]["notInRoleID"][$j] = $aTemp[$j];
			$aNameArray = getFileNameAndPowerNameByPowerID($aPowerList, $aTemp[$j]);
			$aRoleList[$i]["notInRoleName"][$j] = $aNameArray[0]."--".$aNameArray[1];
		}
		$sTempValues 	= array2Set($aRoleList[$i]["notInRoleID"], "");
		$sTempLables	= array2Set($aRoleList[$i]["notInRoleName"], "");
	
		$sDiffArray .= "case '".$aRoleList[$i]['id']."':
			var radioLables = new Array".$sTempLables.";
			var radioValues = new Array".$sTempValues.";
			break;";
	}
	$tpl->assign("sDiffArray", $sDiffArray);
	//处理生成JS函数
	//生成全部的功能区域
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
	
	$tpl->assign("a", $aRoleList);*/	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "添加管理员");
	$tpl->display("admin/manager_add.tpl.htm");
}
elseif($sAction == "addSave")
{
	$aField["userName"] = $_POST["text_userName"];
	$aField["pwd"]		= md5($_POST["text_pwd"]);
	$aField["roleID"]	= $_POST["select_roleID"];
	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	$aField["status"]	= $_POST["radio_status"];
	$aField["isManager"]= $_POST["radio_isManager"];
	$aField["managerID"]= $_POST["select_managerID"];
	$aField["extFunc"]	= serialize($_POST["cc"]);
	//检查用户名是否存在
	$bUserIsExists = $manager->isUserExists($aField["userName"]);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->insert('manager', $aField))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存添加管理员功能",serialize($aField),1);
			redirect("manager.php?act=listAll",3, "成功添加".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存添加管理员功能",0);
			redirect("manager.php?act=add", 5, "添加".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("manager.php?act=add", 5, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
}
//编辑管理员 
elseif($sAction == "modify")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("参数传递错误");
		
	$aInfo["extFunc"] = unserialize($aInfo["extFunc"]);
	$sNowExtFunc = array2Set($aInfo["extFunc"], "");
	if($sNowExtFunc == "(-1)") $sNowExtFunc = "()";	
	//echo $sNowExtFunc; exit;	
	$tpl->assign("nowExtFunc", "new Array".$sNowExtFunc);	
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("aStatus", array("0"=>"关闭","1"=>"开启","2"=>"冻结"));
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	//转化为另外的数组
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//选择所有的领导，字段isManager区分是否是领导
	$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"非领导","1"=>"领导"));
	
	//选出所有的功能列表
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//得到ID组合
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//针对每个角色进行处理，选择出这个角色所不具有的功能列表
	$sDiffArray = "";	//定义sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//得到两个数组，一个是全部的数组，一个是本角色的数组，然后计算着两个数组的差集
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//重新排序一下，这里必须要，否则$aTemp[$j]得不到值
		for ($j=0 ; $j <count($aTemp); $j++)
		{
			$aRoleList[$i]["notInRoleID"][$j] = $aTemp[$j];
			$aNameArray = getFileNameAndPowerNameByPowerID($aPowerList, $aTemp[$j]);
			$aRoleList[$i]["notInRoleName"][$j] = $aNameArray[0]."--".$aNameArray[1];
		}
		$sTempValues 	= array2Set($aRoleList[$i]["notInRoleID"], "");
		$sTempLables	= array2Set($aRoleList[$i]["notInRoleName"], "");
		//差集后生成的js文件
		$sDiffArray .= "case '".$aRoleList[$i]['id']."':
			var radioLables = new Array".$sTempLables.";
			var radioValues = new Array".$sTempValues.";
			break;";
		//当前的js文件
		if($aRoleList[$i]["id"] == $aInfo["roleID"])
			$sNowDiffArray = "var radioLables = new Array".$sTempLables.";
					   		  var radioValues = new Array".$sTempValues.";";
	}
	$tpl->assign("sNowDiffArray", $sNowDiffArray);
	$tpl->assign("sDiffArray", $sDiffArray);
	//处理生成JS函数
	//生成全部的功能区域
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
		
	$tpl->assign("a", $aRoleList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "编辑管理员");
	$tpl->display("admin/manager_modify.tpl.htm");
}
elseif($sAction == "modifySave")
{
	//$aField["userName"] = $_POST["text_userName"];
	if($_POST["modifyPwd"] == 1)
	    $aField["pwd"]	= md5($_POST["text_pwd"]);
	$aField["roleID"]	= $_POST["select_roleID"];
	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["intro"]	= $_POST["intro"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	$aField["status"]	= $_POST["radio_status"];
	$aField["isManager"]= $_POST["radio_isManager"];
	$aField["managerID"]= $_POST["select_managerID"];
	$aField["extFunc"]	= serialize($_POST["cc"]);
	
	//print_r($aField); exit;
	
	//检查用户名是否存在
	$sWhere = " id = '" . $_POST["managerID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->update('manager', $aField, $sWhere))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存修改管理员功能",serialize($aField),1);
			redirect("manager.php?act=listAll",3, "成功修改".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存修改管理员功能",0);
			redirect("manager.php?act=listAll", 5, "修改".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("manager.php?act=listAll", 5, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
} 
elseif ($sAction == "detail")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("参数传递错误");
	$aInfo["extFunc"] = unserialize($aInfo["extFunc"]);
	$tpl->assign("nowExtFunc", "new Array".array2Set($aInfo["extFunc"], ""));
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("aStatus", array("0"=>"关闭","1"=>"开启","2"=>"冻结"));
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	//转化为另外的数组
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//选择所有的领导，字段isManager区分是否是领导
	$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"非领导","1"=>"领导"));
	
	//选出所有的功能列表
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//得到ID组合
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//针对每个角色进行处理，选择出这个角色所不具有的功能列表
	$sDiffArray = "";	//定义sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//得到两个数组，一个是全部的数组，一个是本角色的数组，然后计算着两个数组的差集
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//重新排序一下，这里必须要，否则$aTemp[$j]得不到值
		for ($j=0 ; $j <count($aTemp); $j++)
		{
			$aRoleList[$i]["notInRoleID"][$j] = $aTemp[$j];
			$aNameArray = getFileNameAndPowerNameByPowerID($aPowerList, $aTemp[$j]);
			$aRoleList[$i]["notInRoleName"][$j] = $aNameArray[0]."--".$aNameArray[1];
		}
		$sTempValues 	= array2Set($aRoleList[$i]["notInRoleID"], "");
		$sTempLables	= array2Set($aRoleList[$i]["notInRoleName"], "");
		//差集后生成的js文件
		$sDiffArray .= "case '".$aRoleList[$i]['id']."':
			var radioLables = new Array".$sTempLables.";
			var radioValues = new Array".$sTempValues.";
			break;";
		//当前的js文件
		if($aRoleList[$i]["id"] == $aInfo["roleID"])
			$sNowDiffArray = "var radioLables = new Array".$sTempLables.";
					   		  var radioValues = new Array".$sTempValues.";";
	}
	$tpl->assign("sNowDiffArray", $sNowDiffArray);
	$tpl->assign("sDiffArray", $sDiffArray);
	//处理生成JS函数
	//生成全部的功能区域
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
		
	$tpl->assign("a", $aRoleList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "查看管理员信息");
	$tpl->display("admin/manager_detail.tpl.htm");
} 
elseif ($sAction == "search")
{
	$tpl->display("admin/manager_search.tpl.htm");
} 
elseif ($sAction == "doSearch")
{
	$sWhere = "1";
	$sSQL = "SELECT a.id, a.userName, a.trueName, a.email,a.lastTime,a.lastIP,b.name AS roleName FROM manager a LEFT JOIN role b ON a.roleID=b.id WHERE {$sWhere}";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "查询结果");
	$tpl->display("admin/manager_doSearch.tpl.htm");
} 
elseif ($sAction == "closed")
{
	$iManagerID = $_GET["id"];
	$aField['status'] = 0;
	$db->update("manager", $aField, " id=".$iManagerID);
	redirect("manager.php", 3, "成功关闭用户");	
} 
elseif ($sAction == "open")
{
	$iManagerID = $_GET["id"];
	$aField['status'] = 1;
	$db->update("manager", $aField, " id=".$iManagerID);
	redirect("manager.php", 3, "成功关闭用户");	
} 
//修改用户个人资料　@author: Siyunxian - 2006-12-08
elseif ($sAction == "modifySingle")
{
	$aUserInfo = $manager->getManagerInfo($_SESSION["xzx_uID"]);	
	$tpl->assign("aInfo", $aUserInfo);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "修改资料");
	$tpl->display("admin/manager_modifySingle.tpl.htm");
}
elseif($sAction == "modifySingleSave")
{
	$aField["userName"] = $_POST["text_userName"];
	if(isset($_POST["modifyPwd"]))
	    $aField["pwd"]	= md5($_POST["text_pwd"]);
	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["intro"]	= $_POST["intro"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	//$aField["status"]	= $_POST["radio_status"];
	//检查用户名是否存在
	$sWhere = " id = '" . $_SESSION["xzx_uID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->update('manager', $aField, $sWhere))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存修改个人资料功能",serialize($aField),1);
			redirect("home.php",3, "成功修改".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "执行保存修改个人资料功能",0);
			redirect("home.php", 5, "修改".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("home.php", 5, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
} 
/**
 * 根据ID得到一个关于这个权限的数组
 *
 * @param unknown_type $aPowerList
 * @param unknown_type $iID
 * @return unknown
 */
function getFileNameAndPowerNameByPowerID($aPowerList, $iID)
{
	for ($i=0; $i <count($aPowerList); $i++)
	{
		if($aPowerList[$i]["id"] == $iID)
			return array($aPowerList[$i]["fileNameCn"], $aPowerList[$i]["powerNameCn"]);
	}
}
?>