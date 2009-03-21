<?php
/**
 * （总后台－网民留言）
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //登录检查
require_once("../class/common.inc.php");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
$sGbookTbl = "guestbook";
$sActName = "网民留言";

$tpl->assign("PAGE_FUNC_BIG_LINK", "gbook.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "留言管理");		

if($sAction == "del") // 留言删除
{
	$aID = $_POST['id'];
	$iNum = count($aID);
	if($iNum > 0) 
	{
		$iSuc = $iErr = 0;
		for($i=0; $i<$iNum; $i++)
		{
			$iID = $aID[$i];
			$sSQL = "DELETE FROM $sGbookTbl WHERE id=$iID "; // 该留言已经相关回复的留言一并删除
			if($db->query($sSQL))
				$iSuc ++;
			else	 
				$iErr ++;	
		}
		$sMsg = "删除成功数".$iSuc.";失败数：".$iErr;
		redirect("gbook.php?act=listAll",2,$sMsg);
	}
	else 
	{
		redirect("gbook.php?act=listAll",3,"未选中，删除失败！");
	}
}
elseif($sAction == "listAll") // 留言列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sActName);	
	$tpl->assign("sActName",$sActName);
		
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]);
	$iPerpage = 10;	
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	
	$sWhere .= $q ? "  (content like '%$q%')" : "1";
	
	//得到总数目	
	$iTotalNum = $db->getRowsNum("select count(*) from $sGbookTbl where $sWhere");
	$sSQL = "select * from $sGbookTbl where $sWhere order by id desc LIMIT {$iStartNo}, $iPerpage";
	dividePage("gbook.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&q=".$q);
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		$iID = $aList[$i]['id'];
		if( !empty($aList[$i]['userID']))
		{
			$aList[$i]['userName'] = getUserName($aList[$i]['userID']);
		}
		else 
		{
			$aList[$i]['userName'] = '匿名';
		}
		$aList[$i]['content'] = str_replace(chr(13),"<br>",$aList[$i]['content']);
	}
	
	$tpl->assign("aList",$aList);
	$tpl->assign("q",$q);
	$tpl->display("admin/gbook_listAll.tpl.htm");
}
else 
{
	showError("参数出错！");
}

/**
 * USERID获取 USERNAME
 * */
function getUserName($userID)
{
	global $db;
	$sql = " select userName from member where id = '$userID' ";
	$res = $db->getRecordSet($sql,1);
	return $res['userName'];	
}
?>