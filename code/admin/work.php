<?php
/**
 * work.php(作品管理模块)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
loadLib("category");

$sTbl =  "work";
$sClass = "category";
$tpl->assign("PAGE_FUNC_BIG_LINK", "work.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "作品管理");
$tpl->assign("aENUM",$aENUM);

if($sAction == "add") //添加
{	
	$cID = isset($_GET['cID']) ? $_GET['cID'] : 1;
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);
	
	// 栏目
	$sOptions = category::getCatOptions($sClass,0);	 // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加作品");		
	$tpl->assign("cID",$cID);		
	$tpl->display("admin/work_add.tpl.htm");
}
elseif($sAction=="addSave") // 添加保存
{
	if (empty($_POST['name']))
	{
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"作品名称不能为空！");
	}
	$aField['cID'] = $_POST['cID'];
	$aField['name'] = $_POST['name'];
	$aField['price'] = $_POST['price'];
	$aField['age'] = $_POST['age'];
	$aField['status'] = $_POST['status'];
	$aField['comment'] = $_POST['comment'];
	$aField['description'] = $_POST['content'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	
	if($db->insert($sTbl,$aField))
	{
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"添加成功！");
	}
	else 
	{
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"添加失败！");
	}	
}
elseif($sAction == "edit" && isset($_GET['id'])) // 修改
{	
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑作品");	
	$sSQL = "SELECT * FROM $sTbl WHERE id=$id";
	$aField = $db->getRecordSet($sSQL,1);		
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$oFCKeditor->Value = $aField['description'];
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);	

	// 栏目
	$sOptions = category::getCatOptions($sClass,0,$aField['cID']);	// -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aField",$aField);
	$tpl->display("admin/work_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // 修改保存
{	
	$id = $_POST['id'];
	$aField['cID'] = $_POST['cID'];
	$aField['name'] = $_POST['name'];
	$aField['price'] = $_POST['price'];
	$aField['age'] = $_POST['age'];
	$aField['status'] = $_POST['status'];
	$aField['comment'] = $_POST['comment'];
	$aField['description'] = $_POST['content'];
	$aField['addDate'] = date("Y-m-d H:i:s");

	if($db->update($sTbl,$aField,"id=$id"))
	{
		redirect("work.php?act=listAll&cID=".$_POST['cID'],3,"修改成功！");	
	}
	else 
	{
		redirect("work.php?act=edit&id=".$id,3,"修改失败！");
	}	
}
elseif ($sAction == "listAll")  // 列表
{
	$cID = isset($_REQUEST['cID']) ? $_REQUEST['cID'] : 0; //栏目
	if($cID > 0)
	{
		//$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sWhere = "cID in (".$cID.")";
		$sCatName = category::getCatNameByID($sClass,$cID);				
	}
	else 
	{
		$sWhere = "1";
		$sCatName = "所有";
	}
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."作品列表");
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1; // -1 代表所有作品
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";		
	
	$sWhere .= ($iStatus >=0) ? " AND a.status = '".$iStatus."'" : "  AND a.status != '2' ";
	$sWhere .= $q ? " AND (a.name like '%$q%' ) " : ""; 
	 
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a WHERE $sWhere");	
	
	$sSQL = "SELECT * FROM $sTbl AS a WHERE $sWhere ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		$aList[$i]['catName'] = category::getCatNameByID($sClass,$aList[$i]['cID']);
		$aList[$i]['artist'] = getArtist($aList[$i]['artistID']);
		
	}
	dividePage("work.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&cID=$cID&status=$iStatus&q=$q&perPage=$iPerpage");	
		
	//类别
	$sOptions = category::getCatOptions($sClass,0,$cID);	// -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aList",$aList);
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->assign("cID",$cID);	
	$tpl->display("admin/work_list.tpl.htm");
}
elseif($sAction == "recycle") // 放入回收站
{	
	$cID = $_REQUEST['cID'];	
	$iStatus = $_REQUEST['status'];	
	$sID = array2Str($_POST['newsID']) ;	
	if($db->query("UPDATE $sTbl SET status='2' WHERE id in $sID"))
	{
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"成功放入回收站！");
	}	
	else
	{
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"放入回收站失败！");
	}	
}
elseif($sAction == "uncheck") // 设为普通
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Str($_POST['newsID']);	

	if($db->query("UPDATE $sTbl SET status='0' WHERE id in $sID"))
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"成功设为普通！");
	else
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"设为普通失败！");
}
elseif($sAction == "recommend") // 设为推荐
{	
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2str($_POST['newsID']);	

	if($db->query("UPDATE $sTbl SET status='1' WHERE id in $sID"))
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"成功设为推荐！");
	else
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"设为推荐失败！");
}
else
{
	showError("参数错误");
}


/**
 * 获取作家的名称
 */
function getArtist($artistID)
{
	global $db;
	$sql = " select name from artist where id = '$artistID' ";
	$artist = $db->getRecordSet($sql,1);
	return $artist['name'];
}
?>