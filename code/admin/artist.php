<?php
/**
 * artist.php(作家管理模块)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";
loadLib("artist");
$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";

$sTbl =  "artist";

$tpl->assign("PAGE_FUNC_BIG_LINK", "artist.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "作家管理");
$tpl->assign("aSex",$aSex);

if($sAction == "add") //添加
{	
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);
	
	$eFCKeditor = new FCKeditor('FCKeditor1') ; 
	$eFCKeditor->BasePath = "../js/editor/" ; 
	$eFCKeditor->ToolbarSet = "Default" ; 
	$eFCKeditor->InstanceName = "econtent" ; 
	$eFCKeditor->Width = "90%" ; 
	$eFCKeditor->Height = "400" ; 
	$eContent = $eFCKeditor->Create() ; 
	$tpl->assign("eContent",$eContent);

	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加作家");		
	$tpl->display("admin/artist_add.tpl.htm");
}
elseif($sAction=="addSave") // 添加保存
{
	if( $_POST['name'] == '' || $_POST['content'] == '')
	{
		redirect("artist.php?act=add",2,"姓名或者简介为空！");
	}
	
	$aField['name'] = $_POST['name'];
	$aField['ename'] = $_POST['ename'];
	$aField['sex'] = $_POST['sex'];
	$aField['artistCode'] = $_POST['artistCode'];
	$aField['profession'] = $_POST['profession'];
	$aField['eprofession'] = $_POST['eprofession'];
	$aField['birthday'] = $_POST['birthday'];
	$aField['description'] = $_POST['content'];
	$aField['edescription'] = $_POST['econtent'];
	$aField['addDate'] = date("Y-m-d H:i:s");

	if($db->insert($sTbl,$aField))
	{
		redirect("artist.php?act=add",2,"添加成功！");
	}
	else 
	{
		redirect("artist.php?act=add",2,"添加失败！");
	}	
}
elseif($sAction == "edit") // 修改
{	
	$id = $_GET['id'];
	if (!empty($id))
	{
		$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑作家");	
		$aField = artist::getArtistById($id);		
	}
	else 
	{
		$tpl->assign("PAGE_FUNC_SMALL_NAME","添加作家");
		$aField['name'] = $_GET['name'];
	}
	
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$oFCKeditor->Value = $aField['description'];
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);	
	
	$eFCKeditor = new FCKeditor('FCKeditor1') ; 
	$eFCKeditor->BasePath = "../js/editor/" ; 
	$eFCKeditor->ToolbarSet = "Default" ; 
	$eFCKeditor->InstanceName = "econtent" ; 
	$eFCKeditor->Width = "90%" ; 
	$eFCKeditor->Height = "400" ;  
	$eFCKeditor->Value = $aField['edescription'];
	$eContent = $eFCKeditor->Create() ; 
	$tpl->assign("eContent",$eContent);

	$tpl->assign("aField",$aField);
	$tpl->display("admin/artist_edit.tpl.htm");
}
elseif ($sAction == "editSave") // 修改保存
{
	$id = $_POST['id'];
	if( $_POST['name'] == '' || $_POST['content'] == '')
	{
		redirect("artist.php?act=edit&id=$id",2,"姓名或者简介为空！");
		exit;
	}
	$aField['name'] = $_POST['name'];
	$aField['ename'] = $_POST['ename'];
	$aField['sex'] = $_POST['sex'];
	$aField['profession'] = $_POST['profession'];
	$aField['eprofession'] = $_POST['eprofession'];
	$aField['birthday'] = $_POST['birthday'];
	$aField['description'] = $_POST['content'];
	$aField['edescription'] = $_POST['econtent'];
	$aField['addDate'] = date("Y-m-d H:i:s");	
	//update
	if ($id > 0)
	{
		if($db->update($sTbl,$aField,"id=$id"))
		{
			redirect("artist.php?act=listAll",2,"修改成功！");	
		}
		else 
		{
			redirect("artist.php?act=edit&id=".$id,2,"修改失败！");
		}	
	}
	//insert
	else 
	{
		//计算作者编码（+1即可）
		$aField['artistCode'] = artist::getMaxCode()+1;
		if($db->insert($sTbl,$aField))
		{
			redirect("artist.php?act=edit",2,"添加成功！");
		}
		else 
		{
			redirect("artist.php?act=edit",2,"添加失败！");
		}	
	}
}
elseif ($sAction == "listAll")  // 列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."作家列表");
	 $sWhere = " status != '1' ";
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a WHERE $sWhere");	
	$sSQL = "SELECT * FROM $sTbl AS a WHERE $sWhere ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);

	dividePage("artist.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&userName=$sUserName&cID=$cID&status=$iStatus&q=$q&perPage=$iPerpage");	

	$tpl->assign("aList",$aList);

	$tpl->assign("iPerPage",$iPerpage);
	$tpl->display("admin/artist_list.tpl.htm");
}
elseif($sAction == "del") // 彻底删除
{
	$sID = '(' . implode(',',$_POST['newsID']) . ')';
	
	if($db->query("delete FROM $sTbl WHERE id in $sID"))
		redirect("artist.php?act=listAll",3,"删除成功！");
	else
		redirect("artist.php?act=listAll",5,"删除失败！");		
}
else
{
	showError("参数错误");
}
?>