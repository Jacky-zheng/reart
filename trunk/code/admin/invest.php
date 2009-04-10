<?php
/**
 * work.php(作品管理模块)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
$sTbl =  "content";
$sClass = "category";
$tpl->assign("PAGE_FUNC_BIG_LINK", "invest.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "投资收藏管理");
if($sAction == "edit") // 修改
{	
	if (isset($_GET['id']) && $_GET['id']>0)
	{
		$id = $_GET['id'];
		$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑投资收藏");	
		$sSQL = "SELECT * FROM $sTbl WHERE id=$id";
		$aField = $db->getRecordSet($sSQL,1);
	}
	else 
	{
		$tpl->assign("PAGE_FUNC_SMALL_NAME","添加投资收藏");
		$aField['cateID'] = '2';
	}		
	{
		$sContent = createEditor('content', $aField['content']) ; 
		$tpl->assign("sContent",$sContent);	
		
		$eContent = createEditor('econtent', $aField['econtent']) ; 
		$tpl->assign("eContent",$eContent);		
	}
	$tpl->assign("aField",$aField);
	$tpl->display("admin/invest_edit.tpl.htm");
}
elseif ($sAction == "editSave") // 修改保存
{	
	$id = $_POST['id'];
	$aField['title'] = $_POST['title'];
	$aField['etitle'] = $_POST['etitle'];
	$aField['cateID'] = $_POST['cateID'];
	
	$aField['content'] = $_POST['content'];
	$aField['econtent'] = $_POST['econtent'];
	
	if ($id > 0)
	{
		if($db->update($sTbl,$aField,"id=$id"))
		{
			redirect("invest.php?act=listAll"/*&cID=".$_POST['cID']*/,3,"修改成功！");	
		}
		else 
		{
			redirect("invest.php?act=edit&id=".$id,3,"修改失败！");
		}	
	}
	else 
	{
		if($db->insert($sTbl,$aField))
		{
			redirect("invest.php?act=edit",2,"添加成功！");
		}
		else 
		{
			redirect("invest.php?act=edit",2,"添加失败！");
		}		
	}
}
elseif ($sAction == "listAll")  // 列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."投资收藏列表");
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1; // -1 代表所有作品
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";		
	
	$sWhere .= " cateID='2' ";
	 
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a WHERE $sWhere");	
	
	$sSQL = "SELECT * FROM $sTbl AS a WHERE $sWhere ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	dividePage("invest.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&perPage=$iPerpage");	
		
	$tpl->assign("aList",$aList);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->display("admin/invest_list.tpl.htm");
}
elseif($sAction == "recycle") // 放入回收站
{	
	$sID = array2Str($_POST['newsID']) ;	
	if($db->query("delete from $sTbl WHERE id in $sID"))
	{
		redirect("invest.php?act=listAll",2,"成功放入回收站！");
	}	
	else
	{
		redirect("invest.php?act=listAll",2,"放入回收站失败！");
	}	
}
else
{
	showError("参数错误");
}

function createEditor($instance_name, $value)
{
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = $instance_name ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "200" ; 
	$oFCKeditor->Value = $value;
	$sContent = $oFCKeditor->Create() ; 
	return $sContent;
}
?>