<?php
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("power", $sAction);		//Ȩ�޼��
$tpl->assign("PAGE_FUNC_BIG_LINK", "power.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "Ȩ�޹���");
$tpl->assign("HELP","help.php?id=3");


loadLib("power");
$power = new power();

//Ȩ���б�
if($sAction == "listAll")
{
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : 1;
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	$sFileNameEn = isset($_GET['fileNameEn']) ? $_GET['fileNameEn'] : "";
	
	$sWhere = ($iStatus >=0) ? "status = '$iStatus'" : "1";
	$sWhere .= ($q) ? " AND (fileNameCn like '%$q%' OR powerNameCn like '%$q%' OR fileNameEn like '%$q%' OR powerNameEn like '%$q%')" : "";
	$sWhere .= ($sFileNameEn) ? " AND fileNameEn = '$sFileNameEn'" : "";
	
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM `power` WHERE {$sWhere}");
	$sSQL = "SELECT * FROM `power` WHERE {$sWhere}  LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("power.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "Ȩ���б�");
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->display("admin/power_listAll.tpl.htm");
}
//�����Ȩ��
elseif ($sAction == "add")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "���Ȩ��");	
	$aStatusValue = array("1","0");
	$aStatusName = array("����", "�ر�");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->display("admin/power_add.tpl.htm");	
}
//������ӵ�Ȩ��
elseif($sAction == "addSave")
{
	$aField["fileNameCn"]	= $_POST["text_fileNameCn"];
	$aField["fileNameEn"]	= $_POST["text_fileNameEn"];
	$aField["powerNameCn"] = $_POST["text_powerNameCn"];
	$aField["powerNameEn"]	= $_POST["text_powerNameEn"];
	$aField["status"] = $_POST["radio_status"];
	
	//������ʱ����鹦�ܣ�ģ���Ƿ����
	if($db->insert('power', $aField))
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "ִ�б������Ȩ�޹���",1);
		//redirect("power.php?act=listAll",3, "�ɹ����".$aField["fileNameCn"]."--".$aField["powerNameCn"]."Ȩ��");
		redirect("power.php?act=add",1, "�ɹ����".$aField["fileNameCn"]."--".$aField["powerNameCn"]."Ȩ��");
	}
	else 
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "ִ�б������Ȩ�޹���",0);
		redirect("power.php?act=listAll",5, "���".$aField["fileNameCn"]."--".$aField["powerNameCn"]."ʧ��");
	}
}
//�༭Ȩ��
elseif ($sAction == "modify")
{
	if(!isset($_GET["id"]))
		redirect("power.php?act=listAll", 5, "����Ĳ���");
	$aStatusValue = array("1","0");
	$aStatusName = array("����", "�ر�");
	$aInfo = $power->getPowerInfoByID($_GET["id"]);
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�༭Ȩ��");	
	$tpl->display("admin/power_modify.tpl.htm");	
}
//����༭��Ȩ��
elseif($sAction == "modifySave")
{
	$aField["fileNameCn"]	= $_POST["text_fileNameCn"];
	$aField["fileNameEn"]	= $_POST["text_fileNameEn"];
	$aField["powerNameCn"] = $_POST["text_powerNameCn"];
	$aField["powerNameEn"]	= $_POST["text_powerNameEn"];
	$aField["status"] = $_POST["radio_status"];
	
	$iPowerID = $_POST["powerID"];
	
	//������ʱ����鹦�ܣ�Ȩ���Ƿ����
	if($db->update('power', $aField, " id=".$iPowerID))
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "ִ�б���༭Ȩ�޹���",1);
		redirect("power.php?act=listAll",3, "�ɹ��༭Ȩ��");
	}
	else 
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "ִ�б���༭Ȩ�޹���",0);
		redirect("power.php?act=listAll",3, "�༭ʧ��");
	}
}
elseif ($sAction == "close")
{
	$aField = array();
	$aField["status"] = '0';
	$db->update("power", $aField, "id = ".$_GET["id"]);
	redirect("power.php?act=listAll", 3, "�ɹ��ر�Ȩ��");
	//����Ҫ������ص� ��ɫ������
}
elseif ($sAction == "open")
{
	$aField = array();
	$aField["status"] = '1';
	$db->update("power", $aField, "id = ".$_GET["id"]);
	redirect("power.php?act=listAll", 3, "�ɹ�����Ȩ��");
}
?>