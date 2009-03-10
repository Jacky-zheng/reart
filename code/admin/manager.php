<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("manager", $sAction);		//Ȩ�޼��

$tpl->assign("PAGE_FUNC_BIG_LINK", "manager.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "�û�����");

$manager = new manager();

//����Ա�б�
if($sAction == "listAll")
{
	$sWhere = isset($_GET["status"]) ? " a.status = '".$_GET["status"]."'" : "1";
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum = $db->getRowsNum("SELECT a.id FROM manager a WHERE {$sWhere}");
			
	$sSQL = "SELECT a.id, a.userName, a.trueName, a.email,a.lastTime,a.lastIP,a.status, b.name AS roleName FROM `manager` a LEFT JOIN `role` b ON a.roleID=b.id WHERE {$sWhere} ORDER BY a.id DESC LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("manager.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "����Ա�б�");
	$tpl->display("admin/manager_listAll.tpl.htm");
}
//��ӹ���Ա 
elseif($sAction == "add")
{
	$tpl->assign("aStatus", array("0"=>"�ر�","1"=>"����","2"=>"����"));
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	//ת��Ϊ���������
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//ѡ�����е��쵼���ֶ�isManager�����Ƿ����쵼
	/*$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"���쵼","1"=>"�쵼"));
	
	//ѡ�����еĹ����б�
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//�õ�ID���
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//���ÿ����ɫ���д���ѡ��������ɫ�������еĹ����б�
	$sDiffArray = "";	//����sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//�õ��������飬һ����ȫ�������飬һ���Ǳ���ɫ�����飬Ȼ���������������Ĳ
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//��������һ�£��������Ҫ������$aTemp[$j]�ò���ֵ
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
	//��������JS����
	//����ȫ���Ĺ�������
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
	
	$tpl->assign("a", $aRoleList);*/	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��ӹ���Ա");
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
	//����û����Ƿ����
	$bUserIsExists = $manager->isUserExists($aField["userName"]);
	if(!$bUserIsExists)
	{
		//�û�������
		if($db->insert('manager', $aField))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б�����ӹ���Ա����",serialize($aField),1);
			redirect("manager.php?act=listAll",3, "�ɹ����".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б�����ӹ���Ա����",0);
			redirect("manager.php?act=add", 5, "���".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("manager.php?act=add", 5, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
}
//�༭����Ա 
elseif($sAction == "modify")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("�������ݴ���");
		
	$aInfo["extFunc"] = unserialize($aInfo["extFunc"]);
	$sNowExtFunc = array2Set($aInfo["extFunc"], "");
	if($sNowExtFunc == "(-1)") $sNowExtFunc = "()";	
	//echo $sNowExtFunc; exit;	
	$tpl->assign("nowExtFunc", "new Array".$sNowExtFunc);	
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("aStatus", array("0"=>"�ر�","1"=>"����","2"=>"����"));
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	//ת��Ϊ���������
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//ѡ�����е��쵼���ֶ�isManager�����Ƿ����쵼
	$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"���쵼","1"=>"�쵼"));
	
	//ѡ�����еĹ����б�
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//�õ�ID���
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//���ÿ����ɫ���д���ѡ��������ɫ�������еĹ����б�
	$sDiffArray = "";	//����sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//�õ��������飬һ����ȫ�������飬һ���Ǳ���ɫ�����飬Ȼ���������������Ĳ
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//��������һ�£��������Ҫ������$aTemp[$j]�ò���ֵ
		for ($j=0 ; $j <count($aTemp); $j++)
		{
			$aRoleList[$i]["notInRoleID"][$j] = $aTemp[$j];
			$aNameArray = getFileNameAndPowerNameByPowerID($aPowerList, $aTemp[$j]);
			$aRoleList[$i]["notInRoleName"][$j] = $aNameArray[0]."--".$aNameArray[1];
		}
		$sTempValues 	= array2Set($aRoleList[$i]["notInRoleID"], "");
		$sTempLables	= array2Set($aRoleList[$i]["notInRoleName"], "");
		//������ɵ�js�ļ�
		$sDiffArray .= "case '".$aRoleList[$i]['id']."':
			var radioLables = new Array".$sTempLables.";
			var radioValues = new Array".$sTempValues.";
			break;";
		//��ǰ��js�ļ�
		if($aRoleList[$i]["id"] == $aInfo["roleID"])
			$sNowDiffArray = "var radioLables = new Array".$sTempLables.";
					   		  var radioValues = new Array".$sTempValues.";";
	}
	$tpl->assign("sNowDiffArray", $sNowDiffArray);
	$tpl->assign("sDiffArray", $sDiffArray);
	//��������JS����
	//����ȫ���Ĺ�������
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
		
	$tpl->assign("a", $aRoleList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�༭����Ա");
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
	
	//����û����Ƿ����
	$sWhere = " id = '" . $_POST["managerID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//�û�������
		if($db->update('manager', $aField, $sWhere))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б����޸Ĺ���Ա����",serialize($aField),1);
			redirect("manager.php?act=listAll",3, "�ɹ��޸�".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б����޸Ĺ���Ա����",0);
			redirect("manager.php?act=listAll", 5, "�޸�".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("manager.php?act=listAll", 5, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
} 
elseif ($sAction == "detail")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("�������ݴ���");
	$aInfo["extFunc"] = unserialize($aInfo["extFunc"]);
	$tpl->assign("nowExtFunc", "new Array".array2Set($aInfo["extFunc"], ""));
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("aStatus", array("0"=>"�ر�","1"=>"����","2"=>"����"));
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	//ת��Ϊ���������
	loadLib("role");
	$role = new role();
	$aRoleList = $role->getRoleList(1);
	$aRoleList_ = array2Array($aRoleList, "id", "name");
	$tpl->assign("aRoleList", $aRoleList_);
	
	//ѡ�����е��쵼���ֶ�isManager�����Ƿ����쵼
	$aManagerList = $manager->listAllManager(" isManager = '1'");
	$aManagerList_ = array2Array($aManagerList, "id", "trueName");
	$tpl->assign("aManagerList", $aManagerList_);
	$tpl->assign("bIsManager", array("0"=>"���쵼","1"=>"�쵼"));
	
	//ѡ�����еĹ����б�
	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList();
	//�õ�ID���
	foreach ($aPowerList as $rr)
		$aIDArray[] = $rr["id"];
	//���ÿ����ɫ���д���ѡ��������ɫ�������еĹ����б�
	$sDiffArray = "";	//����sDiffArray
	for($i=0; $i<count($aRoleList); $i++)
	{
		$aPowerID = unserialize($aRoleList[$i]["powerID"]);
		//�õ��������飬һ����ȫ�������飬һ���Ǳ���ɫ�����飬Ȼ���������������Ĳ
		$aTemp = array_diff($aIDArray,$aPowerID);
		sort($aTemp);		//��������һ�£��������Ҫ������$aTemp[$j]�ò���ֵ
		for ($j=0 ; $j <count($aTemp); $j++)
		{
			$aRoleList[$i]["notInRoleID"][$j] = $aTemp[$j];
			$aNameArray = getFileNameAndPowerNameByPowerID($aPowerList, $aTemp[$j]);
			$aRoleList[$i]["notInRoleName"][$j] = $aNameArray[0]."--".$aNameArray[1];
		}
		$sTempValues 	= array2Set($aRoleList[$i]["notInRoleID"], "");
		$sTempLables	= array2Set($aRoleList[$i]["notInRoleName"], "");
		//������ɵ�js�ļ�
		$sDiffArray .= "case '".$aRoleList[$i]['id']."':
			var radioLables = new Array".$sTempLables.";
			var radioValues = new Array".$sTempValues.";
			break;";
		//��ǰ��js�ļ�
		if($aRoleList[$i]["id"] == $aInfo["roleID"])
			$sNowDiffArray = "var radioLables = new Array".$sTempLables.";
					   		  var radioValues = new Array".$sTempValues.";";
	}
	$tpl->assign("sNowDiffArray", $sNowDiffArray);
	$tpl->assign("sDiffArray", $sDiffArray);
	//��������JS����
	//����ȫ���Ĺ�������
	$sTempFileValues 	= array2Set($aPowerList, "fileNameCn");
	$sTempPowerValues	= array2Set($aPowerList, "powerNameCn");
	$sAllRadioLables = "new array".$sTempPowerValues;
	$sAllRadioValues = "new array".array2Set($aPowerList, "id");
		
	$tpl->assign("sAllRadioLables", $sAllRadioLables);
	$tpl->assign("sAllRadioValues", $sAllRadioValues);
		
	$tpl->assign("a", $aRoleList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�鿴����Ա��Ϣ");
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
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��ѯ���");
	$tpl->display("admin/manager_doSearch.tpl.htm");
} 
elseif ($sAction == "closed")
{
	$iManagerID = $_GET["id"];
	$aField['status'] = 0;
	$db->update("manager", $aField, " id=".$iManagerID);
	redirect("manager.php", 3, "�ɹ��ر��û�");	
} 
elseif ($sAction == "open")
{
	$iManagerID = $_GET["id"];
	$aField['status'] = 1;
	$db->update("manager", $aField, " id=".$iManagerID);
	redirect("manager.php", 3, "�ɹ��ر��û�");	
} 
//�޸��û��������ϡ�@author: Siyunxian - 2006-12-08
elseif ($sAction == "modifySingle")
{
	$aUserInfo = $manager->getManagerInfo($_SESSION["xzx_uID"]);	
	$tpl->assign("aInfo", $aUserInfo);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�޸�����");
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
	//����û����Ƿ����
	$sWhere = " id = '" . $_SESSION["xzx_uID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//�û�������
		if($db->update('manager', $aField, $sWhere))
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б����޸ĸ������Ϲ���",serialize($aField),1);
			redirect("home.php",3, "�ɹ��޸�".$aField["userName"]);
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "manager", $sAction, "ִ�б����޸ĸ������Ϲ���",0);
			redirect("home.php", 5, "�޸�".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("home.php", 5, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
} 
/**
 * ����ID�õ�һ���������Ȩ�޵�����
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