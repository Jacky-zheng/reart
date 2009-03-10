<?php
/**
 * ��־ģ��
 * @author xiongzhixin (xzx747@sohu.com) 2007-05-15
 */

require_once("../class/common.inc.php");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "loginLogAll";
checkExecPower("log", $sAction);		//Ȩ�޼��

$tpl->assign("PAGE_FUNC_BIG_LINK", "log.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "��־����");

//��־
loadLib("log");
$log = new log();
//����Ա
$manager = new manager();

/*******************���е�¼��־********************/
if($sAction == "loginAll")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "���е�¼��־");
	//��ҳ
	$iNowPage 	= empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage 	= defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo 	= ($iNowPage - 1) * $iPerpage;
	
	$iAdminType = isset($_REQUEST['adminType']) ? $_REQUEST['adminType'] : -1;
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1;
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	
	$sWhere = ($iAdminType>=0) ? "adminType = '$iAdminType'" : "1";
	$sWhere .= ($iStatus>=0) ? " AND status='$iStatus' " : "";
	$sWhere .= ($q) ? " AND userName like '%$q%'" : "";
	
	//�õ�����Ŀ
	$iTotalNum 	= $db->getRowsNum("SELECT id FROM log_login where $sWhere");
	
	$aLoginAll = $log->loginAll($iStartNo,$iPerpage,$sWhere);	

	dividePage("log.php", $iTotalNum, $iPerpage, $iNowPage, "act=loginAll&adminType=$iAdminType&status=$iStatus");
	
	$aAdminType = array(0=>"�ܺ�̨",1=>"��վ��̨",2=>"���˺�̨",3=>"��ҵ��̨",4=>"ר�Һ�̨");
	$aStatus    = array(0=>"��¼������",1=>"��¼�ɹ�",2=>"�������");
	
	$tpl->assign("aAdminType",$aAdminType);
	$tpl->assign("aStatus",$aStatus);
	$tpl->assign("iAdminType",$iAdminType);
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	
	$tpl->assign("a_loginAll",$aLoginAll);
	$tpl->display("admin/log_loginAll.tpl.htm");
}
/*******************���в�����־********************/
elseif ($sAction == "operateAll")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "���в�����־");
	//��ҳ
	$iNowPage 	= empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage 	= defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo 	= ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum 	= $db->getRowsNum("SELECT id FROM log_operate");
	
	$aOperateAll  = $log->operateAll($iStartNo,$iPerpage);
	//print_r($aOperateAll);
	for ($i=0; $i<count($aOperateAll); $i++)
	{
		$aManagerName[] = $manager->getManagerNameByID($aOperateAll[$i]["uID"]);
		$aOperateAll[$i]["userName"] = $aManagerName[$i]["userName"];
	}
	//$sManagerName = $manager->getManagerNameByID();
	

	dividePage("log.php", $iTotalNum, $iPerpage, $iNowPage, "act=operateAll");

	$tpl->assign("a_operateAll",$aOperateAll);
	$tpl->display("admin/log_operateAll.tpl.htm");
}
/*******************��¼������־********************/
elseif ($sAction == "loginError")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��¼������־");
	//��ҳ
	$iNowPage 	= empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage 	= defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo 	= ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum 	= $db->getRowsNum("SELECT id FROM log_login WHERE status <> '1'");
	
	$aLoginError = $log->loginError($iStartNo,$iPerpage);
	dividePage("log.php", $iTotalNum, $iPerpage, $iNowPage, "act=loginError");
	
	$tpl->assign("a_loginError",$aLoginError);
	$tpl->display("admin/log_loginError.tpl.htm");
}
/*******************����������־********************/
elseif ($sAction == "operateError")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "����������־");
	//��ҳ
	$iNowPage 	= empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage 	= defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo 	= ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum 	= $db->getRowsNum("SELECT id FROM log_operate WHERE status = '0'");
	
	$aOperateError = $log->operateError($iStartNo,$iPerpage);
		
	dividePage("log.php", $iTotalNum, $iPerpage, $iNowPage, "act=operateError");
	
	$tpl->assign("a_operateError",$aOperateError);
	$tpl->display("admin/log_operateError.tpl.htm");
}
/*******************ԽȨ������־********************/
elseif ($sAction == "operateOver")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "ԽȨ������־");
	//��ҳ
	$iNowPage 	= empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage 	= defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo 	= ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum 	= $db->getRowsNum("SELECT id FROM log_operate WHERE status = '2'");
	
	$aOperateOver = $log->operateOver($iStartNo,$iPerpage);

	dividePage("log.php", $iTotalNum, $iPerpage, $iNowPage, "act=operateOver");
	
	$tpl->assign("a_operateOver",$aOperateOver);
	$tpl->display("admin/log_operateOver.tpl.htm");
}
elseif ($sAction == "backup")
{
	$aRadios = array("����������","��������","�������ļ�","����������","����������","������״̬");
	for ($i=0;$i<count($aRadios);$i++)
	{
		$check = "";
		if($i == 0) $check = "checked";
		$sRadios .= "<input name=\"term[]\" type=\"radio\" onclick=\"change_tag_$i();\" $check>".$aRadios[$i];
	}
	$tpl->assign("a_radios",$sRadios);
	//$tpl->assign("a_radios",$aRadios);
	$tpl->display("admin/log_backup.tpl.htm");
}

else showError("���󣺲�������!�ܾ�����!");
?>