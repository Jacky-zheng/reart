<?php
/**
 * pic.php(ͼƬ����ģ��)
 * @author xiongzhixin (xzx747@sohu.com) 2007-06-23 (modify by lentim chen 07-09-29)
 */
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
if($sAction <> "showPage") checkExecPower("news", $sAction);		//Ȩ�޼��
loadLib("category");
loadLib("news");


$sTbl = isset($_GET['tbl']) ? $_GET['tbl'] : "pic";
$sClass = $sTbl."_class";
$tpl->assign("PAGE_FUNC_BIG_LINK", "pic.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "ͼƬ����");


$aHangyeList = category::getCatArrByPID(0,"hangye");

$tpl->assign("aHangyeList",$aHangyeList);
$tpl->assign("aENUM",$aENUM);
$tpl->assign("__NEWS_HTM",__NEWS_HTM);
$tpl->assign("__NEWS_ATTACHED",__NEWS_ATTACHED);
$tpl->assign("__NEWS_PIC",__NEWS_PIC);
$tpl->assign("__USER_PIC",__USER_PIC);


if($sAction == "add") //���
{	
	$cID = isset($_GET['cID']) ? $_GET['cID'] : 1;
	$iHangyeID = isset($_GET['hangyeID']) ? $_GET['hangyeID'] : 1;
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	//$oFCKeditor->Value='xxx';
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);
	
	// ��Ŀ
	$sOptions = category::getCatOptions($sClass,2,$cID);	 // -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME","���ͼƬ");		
	$tpl->assign("cID",$cID);		
	$tpl->assign("iHangyeID",$iHangyeID);		
	$tpl->display("admin/news_add.tpl.htm");
}
elseif($sAction=="addSave") // ��ӱ���
{
	$aField['cID'] = $_POST['cID'];
	$aField['hangyeID'] = $_POST['hangyeID'];
	$aField['title'] = $_POST['title'];
	$aField['keywords'] = $_POST['keywords'];
	$aField['intro'] = $_POST['intro'];
	$aField['isRed'] = $_POST['isRed'];
	$aField['source'] = $_POST['source'];
	$aField['author'] = $_POST['author'];	
	
	loadLib("pic");
	// �ն�ҳͼƬ
	if($_FILES['pic']['name'])
	{	
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic");	
		//����ͼƬ		
		//$sSmallPicName = $pic->makeThumb($sPicName,$aThumbSize['width'], $aThumbSize['height']); // ����ͼ)		
		//$aField['pic'] = $sSmallPicName;		
		$aField['pic'] = $sPicName;	
	}
	// ��ҳͼƬ
	if($_FILES['pic_index']['name'])
	{	
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic_index",1);
		$aField['pic_index'] = $sPicName;
	}

	//Ŀǰֻ�޶������ϴ����������
	for($i=0;$i<3;$i++)
	{
		if($_FILES['attached'.$i]['name'])
		{
			$atta = new pic(__NEWS_ATTACHED);
			//$sAttaName = $atta->uploadPic("attache".$i,$i);
			$sAttaName =($sAttaName) ? $sAttaName.",".$atta->uploadPic("attached".$i,$i) : $atta->uploadPic("attached".$i,$i);
		}
	}

	$aField['attached'] = $sAttaName;	
	
	$aField['content'] = $_POST['content'];
	$aField['userName'] = $_SESSION['xzx_userName'];	
	//$aField['fileName'] = date("Y-m")."/".date("dHis").".htm";
	$aField['fileName'] = date("Y-m")."/".date("dHis").".shtml";
	$aField['addDate'] = date("Y-m-d H:i:s");
	
	if($db->insert($sTbl,$aField))
	{
		//echo "<script>location.href='pic.php?act=add&cID=".$_POST['cID']."';</script>";				
		//redirect("pic.php?act=listAll&cID=".$_POST['cID'],3,"��ӳɹ���");	
		redirect("pic.php?act=add&cID=".$_POST['cID']."&hangyeID=".$_POST['hangyeID'],3,"��ӳɹ���");
	}
	else 
	{
		//redirect("pic.php?act=add&cID=".$_POST['cID'],3,"���ʧ�ܣ�");
	}	
}
elseif($sAction == "edit" && isset($_GET['id'])) // �޸�
{	
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME","�༭ͼƬ");	
	$sSQL = "SELECT * FROM $sTbl WHERE id=$id";
	$aField = $db->getRecordSet($sSQL,1);		
	//print_r($aField);
	$oFCKeditor = new FCKeditor('FCKeditor1') ; 
	$oFCKeditor->BasePath = "../js/editor/" ; 
	$oFCKeditor->ToolbarSet = "Default" ; 
	$oFCKeditor->InstanceName = "content" ; 
	$oFCKeditor->Width = "90%" ; 
	$oFCKeditor->Height = "400" ; 
	$oFCKeditor->Value = $aField['content'];
	$sContent = $oFCKeditor->Create() ; 
	$tpl->assign("sContent",$sContent);	
	if($aField['attached']) 
	{
		$aAttached = split(",",$aField['attached']);		
		$tpl->assign("aAttached",$aAttached);
	}
	// ��Ŀ
	$sOptions = category::getCatOptions($sClass,2,$aField['cID']);	// -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aNum",array(1,2,3));
	$tpl->assign("aField",$aField);
	$tpl->display("admin/news_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // �޸ı���
{
	loadLib("pic");
	
	$id = $_POST['id'];
	$aField['cID'] = $_POST['cID'];
	$aField['hangyeID'] = $_POST['hangyeID'];
	$aField['title'] = $_POST['title'];
	$aField['keywords'] = $_POST['keywords'];
	$aField['intro'] = $_POST['intro'];
	$aField['isRed'] = $_POST['isRed'];
	$aField['source'] = $_POST['source'];
	$aField['author'] = $_POST['author'];	
	
	if($_FILES['pic']['name'])
	{
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic");		
		//����ͼƬ		
		//$sSmallPicName = $pic->makeThumb($sPicName,$aThumbSize['width'], $aThumbSize['height']); // ����ͼ)		
		//$aField['pic'] = $sSmallPicName;		
		$aField['pic'] = $sPicName;	
		unlink(__NEWS_PIC.$_POST['oldPic']);			
	}
	
	if($_FILES['pic_index']['name'])
	{
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic_index",1);	
		$aField['pic_index'] = $sPicName;		
		unlink(__NEWS_PIC.$_POST['oldPic_index']);			
	}
	
	// ԭ���ĸ���
	if($_POST['oldAttached']) $aOldAttached = split(",",$_POST['oldAttached']);
	
	/**  start �ϴ��������� **/
	
	$sNewAttached = $_POST['oldAttached']; //�������ֶθ���ֵ
	for($i=0; $i<3; $i++)
	{
		$sField = "attached".$i;
		$sDelField = "delAttached".$i;
		$sAttached = $aOldAttached[$i];
		if($_POST[$sDelField] && $sAttached)//��������ɾ����������
		{
			unlink(__NEWS_ATTACHED.$sAttached); // ɾ��ԭ����Ӧ�ĸ���	
			if ($sNewAttached != $sAttached)
			{
				$sNewAttached = str_replace($sAttached.",","",$sNewAttached);
				$sNewAttached = str_replace(",".$sAttached,"",$sNewAttached); 
			}
			else
			 {
					$sNewAttached ="";
			}
		}
		else//�޸ĸ�������
		{
			if($_FILES[$sField]['name'])  // �ϴ�
			{	
				$atta = new pic(__NEWS_ATTACHED);
				$sTemp = $atta->uploadPic($sField,$i);			
				if($sAttached)
				{
					unlink(__NEWS_ATTACHED.$sAttached); // ɾ��ԭ����Ӧ�ĸ���
					if ($sNewAttached != $sAttached)
					{
						$sNewAttached = str_replace($sAttached.",","",$sNewAttached);
						$sNewAttached = str_replace(",".$sAttached,"",$sNewAttached); 
					}
					else 
					{
						$sNewAttached = "";
					}
				}
				
				if($sTemp)
				{
					if($sNewAttached == "")
					{
						$sNewAttached = $sTemp;
					}
					else
					{
						$sNewAttached = $sNewAttached.",".$sTemp;
					}
				}										
			}	
		}
	}
	
	/**  end �ϴ��������� **/
	
	$aField['attached'] = $sNewAttached;	
	$aField['content'] = $_POST['content'];
	$aField['userName'] = $_SESSION['xzx_userName'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	
	if($_POST['delPic'])
	{
		unlink(__NEWS_PIC.$_POST['oldPic']);	
		$aField['pic'] = "";
	}
	
	if($_POST['delPic_index'])
	{
		unlink(__NEWS_PIC.$_POST['oldPic_index']);
		$aField['pic_index'] = "";
	}
		
	//print_r($aField);exit;
	if($db->update($sTbl,$aField,"id=$id"))
	{
		$iStatus = $_POST['oldStatus'];	
		//echo $iStatus;exit;
			
		if($iStatus == 1 || $iStatus == 3)
		{		
			 createHtm(__NEWS_HTM,$_POST['fileName'],$id,$sTbl); // ����޸ĵ����������Ϣ��ͬʱ������ҳ��	
			 //createHtm(__NEWS_HTM,$aList[$i]['fileName'],$iID,$sTbl)			
			// exit;
		} 
		redirect("pic.php?act=listAll&status=$iStatus&cID=".$_POST['cID'],3,"�޸ĳɹ���");	
	}
	else 
	{
		redirect("pic.php?act=edit&id=".$id,3,"�޸�ʧ�ܣ�");
	}	
}
elseif ($sAction == "listAll")  // �б�
{
	$cID = isset($_REQUEST['cID']) ? $_REQUEST['cID'] : 0; //��Ŀ
	$iHangyeID = isset($_REQUEST['hangyeID']) ? $_REQUEST['hangyeID'] : 0; //��ҵ
	$sUserName = isset($_REQUEST['userName']) ? $_REQUEST['userName'] : "";
	
	if($cID > 0)
	{
		$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sCatName = "��".category::getCatNameByID($sClass,$cID)."��";				
	}
	elseif($iHangyeID > 0)
	{
		//$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sWhere = "hangyeID = $iHangyeID"; 
		$sCatName = "��".category::getCatNameByID("hangye",$iHangyeID)."��";						
	}
	else 
	{
		$sWhere = "1";
		$sCatName = "����";
	}
	
	if($_SESSION['xzx_roleID'] == 2) // �����ɫΪ�༭
	{
		$sWhere .= " AND userName='".$_SESSION['xzx_userName']."'";
	}
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."ͼƬ�б�");
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1; // -1 ��������ͼƬ
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";	
	
	
	$sWhere .= ($iStatus >=0) ? " AND a.status = '".$iStatus."'" : "";
	$sWhere .= $q ? " AND (a.title like '%$q%' OR a.userName like '%$q%') " : ""; 
	$sWhere .= $sUserName ? " AND a.userName = '$sUserName'" : ""; 
	 
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//�õ�����Ŀ
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM $sTbl AS a WHERE $sWhere");	
	
	$sSQL = "SELECT * FROM $sTbl AS a WHERE $sWhere ORDER BY a.id desc LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		$aList[$i]['catName'] = category::getCatNameByID("pic_class",$aList[$i]['cID']);
		$aList[$i]['hangyeName'] = category::getCatNameByID("hangye",$aList[$i]['hangyeID']);
	}
	//print_r($aList);exit;
	dividePage("pic.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll&userName=$sUserName&cID=$cID&status=$iStatus&q=$q&perPage=$iPerpage");	
	
	$bHaveEditPower = manager::checkPower($_SESSION['xzx_uID'],"news","edit");
	
	// ��Ŀ
	$sOptions = category::getCatOptions($sClass,2,$cID);	// -1��ʾ���޼����ࣻ 0��ʾһ�����ࣻ 1��ʾ�������ࣻ�Դ�����
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aList",$aList);
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->assign("bHaveEditPower",$bHaveEditPower);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->assign("cID",$cID);	
	$tpl->display("admin/news_list.tpl.htm");
}
elseif($sAction == "recycle") // �������վ
{	
	$cID = $_REQUEST['cID'];	
	$iStatus = $_REQUEST['status'];	
	$sID = array2Set($_POST['newsID']);	

	$sSQL = "SELECT id,fileName FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // ɾ����̬ҳ��
	}
	if($db->query("UPDATE $sTbl SET status='2' WHERE id in $sID"))
	{
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"�ɹ��������վ��");
	}	
	else
	{
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"�������վʧ�ܣ�");
	}	
}
elseif($sAction == "uncheck") // ��Ϊδ���
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['newsID']);	
	$sSQL = "SELECT id,fileName FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // ɾ����̬ҳ��
	}
	if($db->query("UPDATE $sTbl SET status='0' WHERE id in $sID"))
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"�ɹ���Ϊδ��ˣ�");
	else
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"��Ϊδ���ʧ�ܣ�");
}
elseif($sAction == "del") // ����ɾ��
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['newsID']);	
	$sSQL = "SELECT id,fileName,pic FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // ɾ����̬ҳ��
		@unlink(__NEWS_PIC.$aList[$i]['pic']);
		@unlink(__NEWS_PIC.$aList[$i]['pic_index']);
	}
	if($db->query("delete FROM $sTbl WHERE id in $sID"))
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"ɾ���ɹ���");
	else
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"ɾ��ʧ�ܣ�");		
}
elseif($sAction == "check" || $sAction == "recommend") // ��˻��Ƽ�
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['newsID']);
	$sSQL = "SELECT id,fileName FROM $sTbl WHERE id in $sID";

	$aList = $db->getRecordSet($sSQL);
	$iSuc = $iErr = 0;
	$iNewStatus = ($sAction == "check") ? "1" : "3";

	for($i=0; $i<count($aList); $i++)
	{
		$iID = $aList[$i]['id'];

		if(createHtm(__NEWS_HTM,$aList[$i]['fileName'],$iID,$sTbl)) // ���ɾ�̬ҳ��
		{
			$db->query("UPDATE $sTbl SET status='$iNewStatus' WHERE id=$iID");
			$iSuc ++;
		}
		else 
			$iErr ++;
	}
	
	
	$sStr = ($sAction == "check") ? "���" : "�Ƽ�";

	redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"{$sStr}�ɹ���ҳ�����ɳɹ���:<font color=blue>".$iSuc."</font>����������<font color=red>".$iErr."</font>��");	
}
elseif($sAction == "showPage" && isset($_GET['id']))
{	
	$id = $_GET['id'];		
	$sSQL = "SELECT * FROM $sTbl WHERE id = $id";
	$aField = $db->getRecordSet($sSQL,1);			
	$aField['catName'] = category::getCatNameByID($sClass,$aField['cID']);	
	if($aField['attached']) 
	{
		$aAttached = split(",",$aField['attached']);
		$tpl->assign("aAttached",$aAttached);
	}	
	$tpl->assign("aNum",array(1,2,3));
	$tpl->assign("aField",$aField);	
	$tpl->assign("sTbl","$sTbl");
	
	//��ȡ��������Ϣ�ı༭��Ա����
	$aEditor=$db->getRecordSet("select pic,intro from manager where userName='".$aField['userName']."' ",1);
	$aEditor['intro'] = Str_sub($aEditor['intro'],106);	
	$tpl->assign("aEditor",$aEditor);
	
	//�ñ༭��Ա������������Ϣ
	$aEditorOther=news::getNewsList(0,6,0,"userName='".$aEditor['userName']."' ");
	$tpl->assign("aEditorOther",$aEditorOther);
	
	//��Ʒ�Ƽ�����Ϣ
	$aRecommend = news::getNewsList(0,7,0);
	$tpl->assign("aRecommend",$aRecommend);
	
	//�Ķ�������Ϣ
	$aReadNum = news::getNewsList(0,7,0,""," click desc ");
	$tpl->assign("aReadNum",$aReadNum);
	
	//���ͼƬ��Ϣ
	$aFivePic = news::getNewsList(0,5,0," pic<>'' ","","pic");
	$tpl->assign("aFivePic",$aFivePic);	
	
	$sTmpPic = strstr($aField['content'],"<img");
	
	$tpl->assign("sPageTitle",$aField['title']."-".$aField['catName']."-".__WEBNAME);
	
	
	if ($sTmpPic=="<img")//ͼƬģ��
	{	
		$tpl->assign("sTmpPic",$sTmpPic);
		$tpl->display("html/news_detail_pic_shtml.tpl.htm");
	}
	else//����ģ��
	{	
		$tpl->display("html/news_detail_word_shtml.tpl.htm");	
	}	
}
elseif($sAction == "makeStatic" && isset($_GET['id'])) // ����ҳ������
{
	$id = $_GET['id'];	
	$aField = $db->getRecordSet("SELECT fileName FROM $sTbl WHERE id=$id",1);
	//print_r($aField);

	if(createHtm(__NEWS_HTM,$aField['fileName'],$id,$sTbl)) // ���ɾ�̬ҳ��
	{	
		redirect(__NEWS_HTM.$aField['fileName'],3,"ҳ�����ɳɹ���");
	}
	else
	{
		redirect(__NEWS_HTM.$aField['fileName'],5,"ҳ������ʧ�ܣ�");
	}
}
elseif($sAction == "copy")//����ת�ƺ͸���
{
	$cID = $_REQUEST['cID'];	
	$cID1 = $_REQUEST['cID1'];	//���ݴ������Ŀ
	$iActType = $_REQUEST['actType'];//�������� ����/ճ��
	$iStatus = $_REQUEST['status'];	
	//echo $cID1.$iActType.$iStatus;
	//exit;
	$sID = array2Set($_POST['newsID']);	

	$sSQL = "SELECT * FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{	//echo $aList
		$aList[$i]["cID"] = $cID1;
		if ($iActType == 1)//���������µľ�̬ҳ��
		{	
			$aList[$i]['id'] = 0;
			$sOldFileName = $aList[$i]['fileName'];//�ϵ��ļ�����
			//$sNewFileName = str_replace(".htm","",$sOldFileName)."_c".".htm";//�����µ��ļ�����
			$sNewFileName = str_replace(".shtml","",$sOldFileName)."_c".".shtml";//�����µ��ļ�����
			$aList[$i]['fileName'] = $sNewFileName;
		
			$db->insert($sTbl,$aList[$i]);
			if ($aList[$i]['status'] == 1 || $aList[$i]['status'] == 3)//��������Ƶ�����������˻��Ƽ��ľ����ɾ�̬ҳ��
			{
				//ֱ�Ӹ����ļ���˳������ļ�����
				copy(__NEWS_HTM.$sOldFileName,__NEWS_HTM.$sNewFileName);
			}
		}
		elseif ($iActType == 2)//ת��
		{
			$aList_c[$i]['cID'] = $cID1;
			$db->update($sTbl,$aList_c[$i],"id=".$aList[$i]["id"]);			
		}
	}	
	redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"�����ɹ���");	
}
else
{
	showError("��������");
}
?>