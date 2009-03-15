<?php
/**
 * content.php(内容模块)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
$sTbl =  "content";

$tpl->assign("PAGE_FUNC_BIG_LINK", "content.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "内容管理");

if($sAction == "edit" && isset($_GET['id'])) // 修改
{	
	$id = $_GET['id'];
	if( 1 == $id)
	{
		$tmp_name = "公司简介";
	}
	elseif ( 2 == $id )
	{
		$tmp_name = "联系我们";
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
elseif ($sAction == "editSave" && isset($_POST['id'])) // 修改保存
{
	$id = $_POST['id'];
	$aField['title'] = $_POST['title'];		
	$aField['content'] = $_POST['content'];

	if($db->update($sTbl,$aField,"id=$id"))
	{
		redirect("content.php?act=edit&id=".$id,3,"修改成功！");	
	}
	else 
	{
		redirect("content.php?act=edit&id=".$id,3,"修改失败！");
	}	
}
else
{
	showError("参数错误");
}
?>