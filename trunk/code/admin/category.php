<?php
/**
 * 类别模块
 */

//define("OPEN_DEBUG",true);
require_once("check_login.php"); //权限检查
require_once("../class/common.inc.php");
$sAction = isset($_REQUEST["act"]) ? $_REQUEST["act"] : "listAll";

loadLib("category");
$sTbl = isset($_GET['tbl']) ? $_GET['tbl'] : "category";
$aTbl = array("category"=>"作品");
$sCatName = $aTbl[$sTbl];

$tpl->assign("PAGE_FUNC_BIG_LINK", "category.php?tbl=$sTbl");
$tpl->assign("PAGE_FUNC_BIG_NAME", "类别管理");
$tpl->assign("sTbl",$sTbl);

if($sAction == "add") // 类别添加
{
	//$pID = isset($_GET['pID']) ? $_GET['pID'] : 0;
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加".$sCatName."类别");
	
/*	$sOptions = category::getCatOptions($sTbl,0); // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推	
	$tpl->assign("pID",$pID);
	$tpl->assign("sOptions",$sOptions);*/
	$tpl->display("admin/category_add.tpl.htm");
}
elseif($sAction == "addSave") //类别添加保存
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
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],3,"添加成功！");
	}		
	else
	{
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],5,"添加失败！");
	}
}
elseif($sAction == "edit" && isset($_GET['id'])) // 类别修改
{
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "修改".$sCatName."类别");
	$aField = $db->getRecordSet("SELECT * FROM $sTbl WHERE id=$id",1);
//	$sOptions = category::getCatOptions($sTbl,1,$aField['pID']);	 // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推	
	
	$tpl->assign("aField",$aField);
//	$tpl->assign("sOptions",$sOptions);	
	$tpl->display("admin/category_edit.tpl.htm");
}
elseif($sAction == "editSave" && isset($_POST['id'])) // 类别修改保存
{
	$id = $_POST['id'];
	$aField['name'] = $_POST['name'];
	$aField['ename'] = $_POST['ename'];
//	$aField['pID'] = $_POST['pID'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($db->update($sTbl,$aField,"id=$id"))
		redirect("category.php?act=listAll&tbl=$sTbl",2,"修改成功！");
	else
		redirect("category.php?act=listAll&tbl=$sTbl",2,"修改失败！");
}
elseif($sAction == "listAll") // 类别列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", $sCatName."类别列表");
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
elseif($sAction == "delete" && isset($_GET['id'])) // 删除
{
	$id  = $_GET['id'];
	if($db->delete($sTbl,"id=$id"))
		redirect("category.php?act=listAll&tbl=$sTbl",1,"删除成功！");
	else
		redirect("category.php?act=listAll&tbl=$sTbl",2,"删除失败！");	
}
else
{
	showError("参数错误！");
}
?>