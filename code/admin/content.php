<?php
/**
 * content.php(����ģ��)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //��¼���
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
$sTbl =  "content";

$tpl->assign("PAGE_FUNC_BIG_LINK", "content.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "���ݹ���");

if($sAction == "edit" && isset($_GET['id'])) // �޸�
{	
	$id = $_GET['id'];
	if( 1 == $id)
	{
		$tmp_name = "��˾���";
	}
	elseif ( 2 == $id )
	{
		$tmp_name = "��ϵ����";
	}
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$tmp_name);	
	$sSQL = "SELECT * FROM $sTbl WHERE id=$id";
	$aField = $db->getRecordSet($sSQL,1);		
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$oFCKeditor->Value = $aField['content'];
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);	

	$tpl->assign("aField",$aField);
	$tpl->display("admin/about_us_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // �޸ı���
{
	$id = $_POST['id'];
	$aField['title'] = $_POST['title'];		
	$aField['content'] = $_POST['content'];

	if($db->update($sTbl,$aField,"id=$id"))
	{
		redirect("content.php?act=edit&id=".$id,3,"�޸ĳɹ���");	
	}
	else 
	{
		redirect("content.php?act=edit&id=".$id,3,"�޸�ʧ�ܣ�");
	}	
}
else
{
	showError("��������");
}
?>