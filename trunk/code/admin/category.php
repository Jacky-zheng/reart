<?php
/**
 * ���ģ��
 */

//define("OPEN_DEBUG",true);
require_once("check_login.php"); //Ȩ�޼��
require_once("../class/common.inc.php");
$sAction = isset($_REQUEST["act"]) ? $_REQUEST["act"] : "listAll";

loadLib("category");
$sTbl = isset($_GET['tbl']) ? $_GET['tbl'] : "category";
$aTbl = array("category"=>"��Ʒ");
$sCatName = $aTbl[$sTbl];

$tpl->assign("PAGE_FUNC_BIG_LINK", "category.php?tbl=$sTbl");
$tpl->assign("PAGE_FUNC_BIG_NAME", "������");
$tpl->assign("sTbl",$sTbl);

if($sAction == "add") // ������
{
	//$pID = isset($_GET['pID']) ? $_GET['pID'] : 0;
	$tpl->assign("PAGE_FUNC_SMALL_NAME","���".$sCatName."���");
	
/*	$sOptions = category::getCatOptions($sTbl,0); // -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����	
	$tpl->assign("pID",$pID);
	$tpl->assign("sOptions",$sOptions);*/
	$tpl->display("admin/category_add.tpl.htm");
}
elseif($sAction == "addSave") //�����ӱ���
{	
	$aField['name'] = $_POST['name'];
	$aField['ename'] = $_POST['ename'];
//	$aField['pID'] = $_POST['pID'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	$id = $db->insert($sTbl,$aField);
		
	if($id > 0)
	{
/*		$aField['orderID'] = $id;*/
		$db->update($sTbl,$aField,"id=$id");
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],3,"��ӳɹ���");
	}		
	else
	{
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],5,"���ʧ�ܣ�");
	}
}
elseif($sAction == "edit" && isset($_GET['id'])) // ����޸�
{
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "�޸�".$sCatName."���");
	$aField = $db->getRecordSet("SELECT * FROM $sTbl WHERE id=$id",1);
//	$sOptions = category::getCatOptions($sTbl,1,$aField['pID']);	 // -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����	
	
	$tpl->assign("aField",$aField);
//	$tpl->assign("sOptions",$sOptions);	
	$tpl->display("admin/category_edit.tpl.htm");
}
elseif($sAction == "editSave" && isset($_POST['id'])) // ����޸ı���
{
	$id = $_POST['id'];
	$aField['name'] = $_POST['name'];
	$aField['ename'] = $_POST['ename'];
//	$aField['pID'] = $_POST['pID'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($db->update($sTbl,$aField,"id=$id"))
		redirect("category.php?act=listAll&tbl=$sTbl",2,"�޸ĳɹ���");
	else
		redirect("category.php?act=listAll&tbl=$sTbl",2,"�޸�ʧ�ܣ�");
}
elseif($sAction == "listAll") // ����б�
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", $sCatName."����б�");
	$pID = isset($_GET['pID'])? $_GET['pID'] : 0;
	$iCorporationID = intval($_GET['corporationID']);
	$aList = category::subCatListByID($sTbl,$pID,1,$iCorporationID);
	for($i=0; $i<count($aList); $i++)		
	{
		$id = $aList[$i]['id'];
		if($pID == 0 || $pID == $id) 
  			$aList[$i]['name'] = "<a href='category.php?act=listAll&tbl=$sTbl&pID=$id'><font color=red><b>".$aList[$i]['name']."</b></font></a>";
  		else 
  			$aList[$i]['name'] = "&nbsp;&nbsp;&raquo;&nbsp;<a href='category.php?act=listAll&tbl=$sTbl&pID=$id'>".$aList[$i]['name']."</a>";

	}
	
	
	$tpl->assign("aList",$aList);
	$tpl->assign("pID",$pID);
	$tpl->display("admin/category_list.tpl.htm");
}
elseif($sAction == "delete" && isset($_GET['id'])) // ɾ��
{
	$id  = $_GET['id'];
	if($db->delete($sTbl,"id=$id"))
		redirect("category.php?act=listAll&tbl=$sTbl",1,"ɾ���ɹ���");
	else
		redirect("category.php?act=listAll&tbl=$sTbl",2,"ɾ��ʧ�ܣ�");	
}
else
{
	showError("��������");
}
?>