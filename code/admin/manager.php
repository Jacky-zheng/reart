<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
require_once("check_login.php"); //Ȩ�޼��
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";

$tpl->assign("PAGE_FUNC_BIG_LINK", "manager.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "�û�����");
$tpl->assign("aStatus", array("0"=>"�ر�","1"=>"����","2"=>"����"));

//��������Ա
if ($_SESSION['xzx_userName'] != 'admin') 
{
	redirect("manager.php?act=$sAction",2, "��Ȩִ���������");
}
else 
{
	$tpl->assign("admin_flag", $_SESSION['xzx_userName']);	
}
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
	$sSQL = "SELECT a.id, a.userName, a.trueName, a.email,a.lastTime,a.lastIP,a.status FROM `manager` a  WHERE {$sWhere} ORDER BY a.id DESC LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("manager.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "����Ա�б�");
	$tpl->display("admin/manager_listAll.tpl.htm");
}
elseif($sAction == "add")  //��ӹ���Ա 
{
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��ӹ���Ա");
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
	//����û����Ƿ����
	$bUserIsExists = $manager->isUserExists($aField["userName"]);
	if(!$bUserIsExists)
	{
		//�û�������
		if($db->insert('manager', $aField))
		{
			redirect("manager.php?act=listAll",2, "�ɹ����".$aField["userName"]);
		}
		else 
		{
			redirect("manager.php?act=add", 2, "���".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("manager.php?act=add", 2, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
}
elseif($sAction == "modify") //�༭����Ա 
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("�������ݴ���");
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);
	$tpl->assign("aInfo", $aInfo);

	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�༭����Ա");
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
	
	//����û����Ƿ����
	$sWhere = " id = '" . $_POST["managerID"] . "'";
	$bUserIsExists = 0;
	//$bUserIsExists = $manager->isUserExists($aField["userName"],1);
	if(!$bUserIsExists)
	{
		//�û�������
		if($db->update('manager', $aField, $sWhere))
		{
			redirect("manager.php?act=listAll",2, "�ɹ��޸�".$aField["userName"]);
		}
		else 
		{
			redirect("manager.php?act=listAll", 2, "�޸�".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("manager.php?act=listAll", 2, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
}
elseif ($sAction == "detail")
{
	$iID = isset($_GET["id"]) ? $_GET["id"] : NULL;
	if(!is_null($iID))
		$aInfo = $manager->getManagerInfo($iID);
	else 
		showError("�������ݴ���");

	$tpl->assign("aInfo", $aInfo);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�鿴����Ա��Ϣ");
	$tpl->display("admin/manager_detail.tpl.htm");
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
elseif ($sAction == "modifySingle")
{
	$aUserInfo = $manager->getManagerInfo($_SESSION["xzx_uID"]);	
	$tpl->assign("aInfo", $aUserInfo);
	//�����������
	loadLib("rand");
	$sRandPwd = rand::makeRand(4, 6);
	$tpl->assign("randPwd", $sRandPwd);	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�޸�����");
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
		//�û�������
		if($db->update('manager', $aField, $sWhere))
		{
			redirect("home.php",2, "�ɹ��޸�".$aField["userName"]);
		}
		else 
		{
			redirect("home.php", 2, "�޸�".$aField["userName"]."ʧ�ܣ�");
		}
	}
	else 
	{
		redirect("home.php", 5, "�û���".$aField["userName"]."�Ѿ����ڣ����ʧ�ܣ�");
	}
}
else 
{
	showError("�������ݴ���");
}
?>