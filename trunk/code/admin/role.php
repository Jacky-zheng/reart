<?php
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("role", $sAction);		//Ȩ�޼��

$tpl->assign("PAGE_FUNC_BIG_LINK", "role.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "��ɫ����");
$tpl->assign("HELP","help.php?id=3");

loadLib("role");
loadLib("power");
$role = new role();
$power = new power();

//��ɫ�б�
if($sAction == "listAll")
{
	$sWhere = isset($_GET["status"]) ? "status = '".$_GET["status"]."'" : "1";
	$sSQL = "SELECT * FROM `role` WHERE {$sWhere}";
	$aList = $db->getRecordSet($sSQL);	
	//$rk��ʾarray key ,rv ��ʾarray value
	for($i = 0 ; $i < count($aList); $i++)
	{
		$aList[$i]["powerID"] = unserialize($aList[$i]["powerID"]);
		$sTable = "";
		for($j = 0; $j <count($aList[$i]["powerID"]); $j++)
		{
			$aName = power::getPowerNameByID($aList[$i]["powerID"][$j]);
			//TO DO �Ѿ��رյĹ��ܱ�ɻ�ɫ
			if($k == 3) $k = 0;
			if($k == 0) $sTable .= "<tr bgcolor=#FFFFFF>\n";
			$sTable .= "<td bgcolor=#FFFFFF>".$aName["fileNameCn"]."--".$aName["powerNameCn"]."</td>";
			$k++;
			if($k == 3) $sTable .= "</tr>\n";
			//$aList[$i]["powerName"] = $aName["fileNameCn"]."--".$aName["powerNameCn"]."&uarr;&nbsp;&nbsp;";
			$aList[$i]["powerNameTable"] = $sTable;
		}
	}
	//print_r($aPowerName);
	$tpl->assign("aList", $aList);
	//$tpl->assign("aPowerName",$aPowerName);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��ɫ�б�");
	$tpl->display("admin/role_listAll.tpl.htm");
}
//����½�ɫ
elseif ($sAction == "add")
{
	$aPowerList = $power->getPowerList(1);
	$tpl->assign("aPowerList", $aPowerList);
	$aStatusValue = array("1","0");
	$aStatusName = array("����", "�ر�");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��ӽ�ɫ");
	$tpl->display("admin/role_add.tpl.htm");	
}
//������ӵĽ�ɫ
elseif($sAction == "addSave")
{
	$aField["name"]	= $_POST["text_roleName"];
	$aField["description"] = $_POST["text_description"];
	$aField["powerID"]	= serialize($_POST["powerID"]);
	$aField["status"] = $_POST["radio_status"];
		
	//����ɫ���Ƿ����
	$bRoleIsExists = $db->getRowsNum("SELECT id FROM `role` WHERE name='".$aField["name"]."'");
	if(!$bRoleIsExists)
	{
		//��ɫ������
		if($db->insert('role', $aField))
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "ִ�б�����ӽ�ɫ����",1);
			redirect("role.php?act=listAll",3, "�ɹ����".$aField["name"]."��ɫ");
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "ִ�б�����ӽ�ɫ����",0);
			redirect("role.php?act=add", 5, "���".$aField["name"]."ʧ�ܣ�");
		}
	}
	else 
		redirect("role.php?act=add", 5, "�û���".$aField["name"]."�Ѿ����ڣ����ʧ�ܣ�");	
}
//�༭��ɫ
elseif ($sAction == "modify")
{
	if(!isset($_GET["id"]))
		redirect("role.php?act=listAll", 5, "��������");
	$aInfo = $role->getRoleInfoByID($_GET["id"]);
	$aInfo["powerID"] = unserialize($aInfo["powerID"]);
	$tpl->assign("aInfo", $aInfo);
	$aStatusValue = array("1","0");
	$aStatusName = array("����", "�ر�");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("powerID", $aInfo["powerID"]);
	$aPowerList = $power->getPowerList();
	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�༭��ɫ");
	$tpl->display("admin/role_modify.tpl.htm");	
}
//����༭�Ľ�ɫ
elseif($sAction == "modifySave")
{
	$aField["name"]	= $_POST["text_roleName"];
	$aField["description"] = $_POST["text_description"];
	$aField["powerID"]	= serialize($_POST["powerID"]);
	$aField["status"] = $_POST["radio_status"];
	
	$iRoleID = $_POST["roleID"];
	//����ɫ���Ƿ����
	$bRoleIsExists = $db->getRowsNum("SELECT id FROM `role` WHERE name='".$aField["name"]."' AND id <> ".$iRoleID);
	if(!$bRoleIsExists)
	{
		//��ɫ������
		if($db->update('role', $aField, " id=".$iRoleID))
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "ִ�б���༭��ɫ����",1);
			redirect("role.php?act=listAll",3, "�ɹ��༭".$aField["name"]."��ɫ");
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "ִ�б���༭��ɫ����",0);
			redirect("role.php?act=modify&id=".$iRoleID, 5, "�༭".$aField["name"]."ʧ�ܣ�");
		}
	}
	else 
		redirect("role.php?act=modify&id=".$iRoleID, 5, "��ɫ��".$aField["name"]."�Ѿ����ڣ��༭ʧ�ܣ�");	
}
elseif ($sAction == "close")
{
	$aField = array();
	$aField["status"] = '0';
	$db->update("role", $aField, "id = ".$_GET["id"]);
	redirect("role.php?act=listAll", 3, "�ɹ��رս�ɫ");
}
elseif ($sAction == "open")
{
	$aField = array();
	$aField["status"] = '1';
	$db->update("role", $aField, "id = ".$_GET["id"]);
	redirect("role.php?act=listAll", 3, "�ɹ�������ɫ");
}
?>