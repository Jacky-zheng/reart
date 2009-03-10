<?php
/**
 * ���ܺ�̨���������ԣ�
 */
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
$sGbookTbl = "gbook";
$sActName = "��������";

$tpl->assign("PAGE_FUNC_BIG_LINK", "gbook.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "���Թ���");
checkExecPower("gbookToCn315", $sAction);		//Ȩ�޼��		

if($sAction == "del") // ����ɾ��
{
	$aID = $_POST['id'];
	$iNum = count($aID);
	if($iNum > 0) 
	{
		$iSuc = $iErr = 0;
		for($i=0; $i<$iNum; $i++)
		{
			$iID = $aID[$i];
			$sSQL = "DELETE FROM $sGbookTbl WHERE id=$iID or pID = $iID"; // �������Ѿ���ػظ�������һ��ɾ��
			//echo $sSQL;exit;
			if($db->query($sSQL))
				$iSuc ++;
			else	 
				$iErr ++;	
		}
		$sMsg = "ɾ���ɹ���".$iSuc.";ʧ������".$iErr;
		redirect("gbook.php?act=listAll",3,$sMsg);
	}
	else 
	{
		redirect("gbook.php?act=listAll",3,"δѡ�У�ɾ��ʧ�ܣ�");
	}
}
elseif ($sAction == "reply") // ���Իظ�
{
	$aID = $_POST['id'];
	$aContent = $_POST['content'];
	$aHaveReply = $_POST['haveReply'];
	$iNum = count($aID);
	//print_r($aID);	
	//print_r($aHaveReply);exit;
	
	if($iNum > 0) 
	{
		$iSuc = $iErr = 0;
		for($i=0; $i<$iNum; $i++)
		{
			$aField = array();
			$aField['pID'] = $aID[$i];
			$aField['content'] = addslashes($aContent[$i]);
			$aField['addDate'] = date("Y-m-d H:i:s");
			
			$iHaveReply = $aHaveReply[$i];
			if($iHaveReply == 0) // ���޻ظ�
			{
				if($db->insert($sGbookTbl,$aField) && $db->query("update $sGbookTbl set isReply='1' where id=".$aID[$i])) // �ظ�����ԭ������Ϊ�ѻظ�
					$iSuc ++;
				else	 
					$iErr ++;	
			}
			else  // �лظ�
			{
				if($db->update($sGbookTbl,$aField,"pID=".$aID[$i]))
					$iSuc ++;
				else 
					$iErr ++;	
			}
			
		}
		$sMsg = "�ظ��ɹ���".$iSuc.";ʧ������".$iErr;
		redirect("gbook.php?act=listAll",3,$sMsg);
	}
	else 
	{
		redirect("gbook.php?act=listAll",3,"δѡ�У��ظ�ʧ�ܣ�");
	}
}
elseif($sAction == "listAll") // �����б�
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sActName);	
	$tpl->assign("sActName",$sActName);
		
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]);
	$iPerpage = 10;	
	$iStartNo = ($iNowPage - 1) * $iPerpage;

	$iIsReply = isset($_REQUEST['isReply']) ? $_REQUEST['isReply'] : "-1";
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	
	$sWhere = "pID = 0";
	$sWhere .= ($iIsReply >= 0) ? " AND isReply = '$iIsReply'" : "";
	$sWhere .= $q ? " AND (content like '%$q%' or trueName like '%$q%')" : "";
	
	//�õ�����Ŀ	
	$iTotalNum = $db->getRowsNum("select count(*) from $sGbookTbl where $sWhere");
	$sSQL = "select * from $sGbookTbl where $sWhere order by id desc LIMIT {$iStartNo}, $iPerpage";
	dividePage("gbook.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&isReply=$iIsReply&q=".$q);
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		$iID = $aList[$i]['id'];
		$iSex = $aList[$i]['sex'];
		$aList[$i]['sex'] = $aSex[$iSex];
		$aList[$i]['content'] = str_replace(chr(13),"<br>",$aList[$i]['content']);
		if($aList[$i]['isReply'] == 1)
		{
			$aTemp = $db->getRecordSet("select addDate,content from $sGbookTbl where pID=$iID",1); //�ظ�����
			$aList[$i]['replyContent'] = $aTemp['content'];	
			$aList[$i]['replyDate'] = $aTemp['addDate'];	
		}
	}
	
	$tpl->assign("aList",$aList);
	$tpl->assign("q",$q);
	$tpl->assign("iIsReply",$iIsReply);	
	$tpl->display("admin/gbookToCn315_listAll.tpl.htm");
}
else 
{
	showError("��������");
}
?>