<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
require_once("check_login.php"); //权限检查
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";

$tpl->assign("PAGE_FUNC_BIG_LINK", "manager.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "用户管理");
$tpl->assign("aStatus", array("0"=>"关闭","1"=>"开启","2"=>"冻结"));

//超级管理员
if ($_SESSION['xzx_userName'] != 'admin') 
{
	redirect("manager.php?act=$sAction",2, "无权执行这个功能");
}
else 
{
	$tpl->assign("admin_flag", $_SESSION['xzx_userName']);	
}
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
	$sSQL = "SELECT a.id, a.userName, a.trueName, a.email,a.lastTime,a.lastIP,a.status FROM `manager` a  WHERE {$sWhere} ORDER BY a.id DESC LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("manager.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "管理员列表");
	$tpl->display("admin/manager_listAll.tpl.htm");
}
elseif($sAction == "add")  //添加管理员 
{
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "添加管理员");
	$tpl->display("admin/manager_add.tpl.htm");
}
elseif($sAction == "addSave")
{
	$aField["userName"] = $_POST["text_userName"];
	$aField["pwd"]		= md5($_POST["text_pwd"]);
	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	$aField["status"]= $_POST["radio_status"];
	//检查用户名是否存在
	$bUserIsExists = $manager->isUserExists($aField["userName"]);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->insert('manager', $aField))
		{
			redirect("manager.php?act=listAll",2, "成功添加".$aField["userName"]);
		}
		else 
		{
			redirect("manager.php?act=add", 2, "添加".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("manager.php?act=add", 2, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
}
elseif($sAction == "modify") //编辑管理员 
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("参数传递错误");
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	$tpl->assign("aInfo", $aInfo);

	$tpl->assign("PAGE_FUNC_SMALL_NAME", "编辑管理员");
	$tpl->display("admin/manager_edit.tpl.htm");
}
elseif($sAction == "modifySave")
{
	$aField["userName"] = $_POST["text_userName"];
	if($_POST["modifyPwd"] == 1)
	    $aField["pwd"]	= md5($_POST["text_pwd"]);

	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	$aField["status"]= $_POST["radio_status"];
	
	//检查用户名是否存在
	$sWhere = " id = '" . $_POST["managerID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->update('manager', $aField, $sWhere))
		{
			redirect("manager.php?act=listAll",2, "成功修改".$aField["userName"]);
		}
		else 
		{
			redirect("manager.php?act=listAll", 2, "修改".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("manager.php?act=listAll", 2, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
}
elseif ($sAction == "detail")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("参数传递错误");

	$tpl->assign("aInfo", $aInfo);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "查看管理员信息");
	$tpl->display("admin/manager_detail.tpl.htm");
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
elseif ($sAction == "modifySingle")
{
	$aUserInfo = $manager->getManagerInfo($_SESSION["xzx_uID"]);	
	$tpl->assign("aInfo", $aUserInfo);
	//生成随机密码
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "修改资料");
	$tpl->display("admin/manager_modifySingle.tpl.htm");
}
elseif($sAction == "modifySingleSave")
{
	$aField["userName"] = $_POST["text_userName"];
	if($_POST["modifyPwd"] == 1)
	    $aField["pwd"]	= md5($_POST["text_pwd"]);

	$aField["trueName"]	= $_POST["text_trueName"];
	$aField["msn"]		= $_POST["text_msn"];
	$aField["qq"]		= intval($_POST["text_qq"]);
	$aField["email"]	= $_POST["text_email"];
	$aField["telephone"]= $_POST["text_telephone"];
	$aField["mobile"]	= $_POST["text_mobile"];
	$aField["status"]= $_POST["radio_status"];
	
	$sWhere = " id = '" . $_SESSION["xzx_uID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//用户不存在
		if($db->update('manager', $aField, $sWhere))
		{
			redirect("home.php",2, "成功修改".$aField["userName"]);
		}
		else 
		{
			redirect("home.php", 2, "修改".$aField["userName"]."失败！");
		}
	}
	else 
	{
		redirect("home.php", 5, "用户名".$aField["userName"]."已经存在，添加失败！");
	}
}
else 
{
	showError("参数传递错误");
}
?>