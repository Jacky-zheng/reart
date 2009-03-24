<?php
/**
 * artist.php(作家管理模块)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";

$sTbl =  "price";

$tpl->assign("PAGE_FUNC_BIG_LINK", "price.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "价格管理");
$tpl->assign("aSex",$aSex);

if($sAction == "add") //添加
{	
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加价格");		
	$tpl->display("admin/price_add.tpl.htm");
}
elseif($sAction=="addSave") // 添加保存
{
	if( $_POST['price_name'] == '' || $_POST['price_ename'] == '')
	{
		redirect("price.php?act=add",2,"价格为空！");
	}
	
	$aField['price_name'] = $_POST['price_name'];
	$aField['price_ename'] = $_POST['price_ename'];

	if($db->insert($sTbl,$aField))
	{
		redirect("price.php?act=add",2,"添加成功！");
	}
	else 
	{
		redirect("price.php?act=add",2,"添加失败！");
	}	
}
elseif($sAction == "edit" && isset($_GET['id'])) // 修改
{	
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑价格");	
	$sSQL = "SELECT * FROM $sTbl WHERE id=$id";
	$aField = $db->getRecordSet($sSQL,1);		
	
	$tpl->assign("aField",$aField);
	$tpl->display("admin/price_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_REQUEST['id'])) // 修改保存
{
	$id = $_REQUEST['id'];
	if( $_REQUEST['price_name'] == '' || $_REQUEST['price_ename'] == '' || $id == '')
	{
		redirect("price.php?act=edit&id=$id",2,"价格为空！");
		exit;
	}
	$aField['price_name'] = $_REQUEST['price_name'];
	$aField['price_ename'] = $_REQUEST['price_ename'];
		
	if($db->update($sTbl,$aField,"id=$id"))
	{
		redirect("price.php?act=listAll",2,"修改成功！");	
	}
	else 
	{
		redirect("price.php?act=edit&id=".$id,2,"修改失败！");
	}	
}
elseif ($sAction == "listAll")  // 列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."价格列表");
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a");	
	$sSQL = "SELECT * FROM $sTbl AS a ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);

	dividePage("price.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&userName=$sUserName&cID=$cID&status=$iStatus&q=$q&perPage=$iPerpage");	

	$tpl->assign("aList",$aList);

	$tpl->assign("iPerPage",$iPerpage);
	$tpl->display("admin/price_list.tpl.htm");
}
elseif($sAction == "del") // 彻底删除
{
	$sID = '(' . implode(',',$_POST['newsID']) . ')';
	
	if($db->query("delete FROM $sTbl WHERE id in $sID"))
		redirect("price.php?act=listAll",3,"删除成功！");
	else
		redirect("price.php?act=listAll",5,"删除失败！");		
}
else
{
	showError("参数错误");
}
?>