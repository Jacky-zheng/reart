<?php
/**
 * person.php(会员模块)
 */
//define("OPEN_DEBUG",true);					//是否开启调试开关
require_once("../class/common.inc.php");
loadLib("category");
loadLib("area");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
checkExecPower("person", $sAction);		//权限检查
$sTbl = "person"; 

$tpl->assign("PAGE_FUNC_BIG_LINK", "person.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "会员管理");

if($sAction == "edit" && $_GET['id']) // 修改
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑会员");	
	
	$id = $_GET['id'];
	$iUserType = $_GET['userType'];	
	$iPageNo = $_GET['pageNo'];
		
	$sSQL = "SELECT * FROM $sTbl WHERE id = $id";
	$aField = $db->getRecordSet($sSQL,1);

	$tpl->assign("aField",$aField);	
	$tpl->assign("iPageNo",$iPageNo);
	$tpl->display("admin/person_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // 修改保存
{
	$id = $_POST['id'];
	$iUserType = $_POST['userType'];
	//$iStatus = $_POST['status'];
	/** 基本资料 **/
	if(isset($_POST['modifyPwd']))//修改密码
	{
		$aField['pwd'] = md5($_POST['pwd']);		
	}
	$aField['address'] = $_POST['address'];
	$aField['phone'] = $_POST['phone'];	
	$aField['email'] = $_POST['email'];
	
	if($db->update($sTbl,$aField,"id='$id' "))
	{		
		redirect("?act=edit&id=$id",3,"编辑成功！");
	}
	else
	{	
		redirect("?act=edit&id=$id",3,"编辑失败！");
	}
}
elseif ($sAction == "listAll")  // 列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME","会员列表");			
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1;
	
	$sWhere = ($iStatus >=0) ? "status = '$iStatus'" : "1";		
	$sWhere .= $q ? " AND (userName like '%$q%' OR trueName like '%$q%')" : "";
		
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT count(id) FROM $sTbl  WHERE $sWhere");		
	$sSQL = "SELECT * FROM $sTbl WHERE $sWhere ORDER BY id DESC LIMIT {$iStartNo}, $iPerpage";
	
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{	
		$aList[$i]['hangyeName'] = category::getCatNameByID("hangye",$aList[$i]['hangyeID']);		
	}
	//exit;
	dividePage("person.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&q=$q&perPage=$iPerpage");	
	
	$bHaveEditPower = manager::checkPower($_SESSION['xzx_uID'],"person","edit");
	$tpl->assign("aList",$aList);
	$tpl->assign("iStatus",$iStatus);	
	$tpl->assign("q",$q);
	$tpl->assign("bHaveEditPower",$bHaveEditPower);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->assign("iPageNo",$iNowPage);
	$tpl->display("admin/person_list.tpl.htm");
}
elseif ($sAction == "uncheck")//设为未审核
{
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['id']);
	$sSQL = " select userName from $sTbl where id in $sID ";
	$aList = $db->getRecordSet($sSQL);
	
	/**	
	for($i=0;$i<count($aList);$i++)
	{	
		@unlink(__LAWYER_HTM.$aList[$i]['userName']."/index.htm"); // 删除会员首页静态页面
	}
	**/

	if($db->query(" update $sTbl set status = '0' where id in $sID "))
	{
		redirect("?act=listAll&status=$iStatus",3,"操作成功！");
	}
	else 
	{
		redirect("?act=listAll&status=$iStatus",3,"操作失败！");

	}	
}
elseif ($sAction == "check")//审核--启用
{
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['id']);

	if($db->query("UPDATE $sTbl SET status='1' WHERE id in $sID"))
	{
		redirect("?act=listAll&status=$iStatus",3,"操作成功！");
	}
	else 
	{
		redirect("?act=listAll&status=$iStatus",3,"操作失败！");
	}
}
elseif($sAction == "stop") // 停用
{
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['id']);
	$sSQL = " select userName from $sTbl where id in $sID ";
	$aList = $db->getRecordSet($sSQL);	
	for($i=0;$i<count($aList);$i++)
	{	
		@unlink(__LAWYER_HTM.$aList[$i]['userName']."/index.htm"); // 删除会员首页静态页面
	}

	if($db->query("UPDATE $sTbl SET status='2' WHERE id in $sID"))
	{
		redirect("?act=listAll&status=$iStatus",3,"操作成功！");
	}
	else 
	{
		redirect("?act=listAll&status=$iStatus",3,"操作失败！");
	}
}
else
{
	showError("参数错误");
}
?>