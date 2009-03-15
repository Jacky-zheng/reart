<?php
/**
 * work.php(��Ʒ����ģ��)
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php"); //��¼���
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
loadLib("category");

$sTbl =  "work";
$sClass = "category";
$tpl->assign("PAGE_FUNC_BIG_LINK", "work.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "��Ʒ����");
$tpl->assign("aENUM",$aENUM);

if($sAction == "add") //���
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
	
	// ��Ŀ
	$sOptions = category::getCatOptions($sClass,0);	 // -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME","�����Ʒ");		
	$tpl->assign("cID",$cID);		
	$tpl->display("admin/work_add.tpl.htm");
}
elseif($sAction=="addSave") // ��ӱ���
{
	if (empty($_POST['name']))
	{
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"��Ʒ���Ʋ���Ϊ�գ�");
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
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"��ӳɹ���");
	}
	else 
	{
		redirect("work.php?act=add&cID=".$_POST['cID'],2,"���ʧ�ܣ�");
	}	
}
elseif($sAction == "edit" && isset($_GET['id'])) // �޸�
{	
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME","�༭��Ʒ");	
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

	// ��Ŀ
	$sOptions = category::getCatOptions($sClass,0,$aField['cID']);	// -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aField",$aField);
	$tpl->display("admin/work_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // �޸ı���
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
		redirect("work.php?act=listAll&cID=".$_POST['cID'],3,"�޸ĳɹ���");	
	}
	else 
	{
		redirect("work.php?act=edit&id=".$id,3,"�޸�ʧ�ܣ�");
	}	
}
elseif ($sAction == "listAll")  // �б�
{
	$cID = isset($_REQUEST['cID']) ? $_REQUEST['cID'] : 0; //��Ŀ
	if($cID > 0)
	{
		//$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sWhere = "cID in (".$cID.")";
		$sCatName = category::getCatNameByID($sClass,$cID);				
	}
	else 
	{
		$sWhere = "1";
		$sCatName = "����";
	}
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."��Ʒ�б�");
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1; // -1 ����������Ʒ
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";		
	
	$sWhere .= ($iStatus >=0) ? " AND a.status = '".$iStatus."'" : "  AND a.status != '2' ";
	$sWhere .= $q ? " AND (a.name like '%$q%' ) " : ""; 
	 
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a WHERE $sWhere");	
	
	$sSQL = "SELECT * FROM $sTbl AS a WHERE $sWhere ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		$aList[$i]['catName'] = category::getCatNameByID($sClass,$aList[$i]['cID']);
		$aList[$i]['artist'] = getArtist($aList[$i]['artistID']);
		
	}
	dividePage("work.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&cID=$cID&status=$iStatus&q=$q&perPage=$iPerpage");	
		
	//���
	$sOptions = category::getCatOptions($sClass,0,$cID);	// -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aList",$aList);
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->assign("cID",$cID);	
	$tpl->display("admin/work_list.tpl.htm");
}
elseif($sAction == "recycle") // �������վ
{	
	$cID = $_REQUEST['cID'];	
	$iStatus = $_REQUEST['status'];	
	$sID = array2Str($_POST['newsID']) ;	
	if($db->query("UPDATE $sTbl SET status='2' WHERE id in $sID"))
	{
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"�ɹ��������վ��");
	}	
	else
	{
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"�������վʧ�ܣ�");
	}	
}
elseif($sAction == "uncheck") // ��Ϊ��ͨ
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Str($_POST['newsID']);	

	if($db->query("UPDATE $sTbl SET status='0' WHERE id in $sID"))
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"�ɹ���Ϊ��ͨ��");
	else
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"��Ϊ��ͨʧ�ܣ�");
}
elseif($sAction == "recommend") // ��Ϊ�Ƽ�
{	
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2str($_POST['newsID']);	

	if($db->query("UPDATE $sTbl SET status='1' WHERE id in $sID"))
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"�ɹ���Ϊ�Ƽ���");
	else
		redirect("work.php?act=listAll&cID=$cID&status=$iStatus",2,"��Ϊ�Ƽ�ʧ�ܣ�");
}
else
{
	showError("��������");
}


/**
 * ��ȡ���ҵ�����
 */
function getArtist($artistID)
{
	global $db;
	$sql = " select name from artist where id = '$artistID' ";
	$artist = $db->getRecordSet($sql,1);
	return $artist['name'];
}
?>