<?php
/**
 * pic.php(图片管理模块)
 * @author xiongzhixin (xzx747@sohu.com) 2007-06-23 (modify by lentim chen 07-09-29)
 */
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
include "../js/editor/fckeditor.php";

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
if($sAction <> "showPage") checkExecPower("news", $sAction);		//权限检查
loadLib("category");
loadLib("news");


$sTbl = isset($_GET['tbl']) ? $_GET['tbl'] : "pic";
$sClass = $sTbl."_class";
$tpl->assign("PAGE_FUNC_BIG_LINK", "pic.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "图片管理");


$aHangyeList = category::getCatArrByPID(0,"hangye");

$tpl->assign("aHangyeList",$aHangyeList);
$tpl->assign("aENUM",$aENUM);
$tpl->assign("__NEWS_HTM",__NEWS_HTM);
$tpl->assign("__NEWS_ATTACHED",__NEWS_ATTACHED);
$tpl->assign("__NEWS_PIC",__NEWS_PIC);
$tpl->assign("__USER_PIC",__USER_PIC);


if($sAction == "add") //添加
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
	
	// 栏目
	$sOptions = category::getCatOptions($sClass,2,$cID);	 // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加图片");		
	$tpl->assign("cID",$cID);		
	$tpl->assign("iHangyeID",$iHangyeID);		
	$tpl->display("admin/news_add.tpl.htm");
}
elseif($sAction=="addSave") // 添加保存
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
	// 终端页图片
	if($_FILES['pic']['name'])
	{	
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic");	
		//处理图片		
		//$sSmallPicName = $pic->makeThumb($sPicName,$aThumbSize['width'], $aThumbSize['height']); // 缩略图)		
		//$aField['pic'] = $sSmallPicName;		
		$aField['pic'] = $sPicName;	
	}
	// 首页图片
	if($_FILES['pic_index']['name'])
	{	
		$pic = new pic(__NEWS_PIC);
		$sPicName = $pic->uploadPic("pic_index",1);
		$aField['pic_index'] = $sPicName;
	}

	//目前只限定三个上传附件输入框
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
		//redirect("pic.php?act=listAll&cID=".$_POST['cID'],3,"添加成功！");	
		redirect("pic.php?act=add&cID=".$_POST['cID']."&hangyeID=".$_POST['hangyeID'],3,"添加成功！");
	}
	else 
	{
		//redirect("pic.php?act=add&cID=".$_POST['cID'],3,"添加失败！");
	}	
}
elseif($sAction == "edit" && isset($_GET['id'])) // 修改
{	
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME","编辑图片");	
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
	// 栏目
	$sOptions = category::getCatOptions($sClass,2,$aField['cID']);	// -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aNum",array(1,2,3));
	$tpl->assign("aField",$aField);
	$tpl->display("admin/news_edit.tpl.htm");
}
elseif ($sAction == "editSave" && isset($_POST['id'])) // 修改保存
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
		//处理图片		
		//$sSmallPicName = $pic->makeThumb($sPicName,$aThumbSize['width'], $aThumbSize['height']); // 缩略图)		
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
	
	// 原来的附件
	if($_POST['oldAttached']) $aOldAttached = split(",",$_POST['oldAttached']);
	
	/**  start 上传附件处理 **/
	
	$sNewAttached = $_POST['oldAttached']; //给附件字段赋新值
	for($i=0; $i<3; $i++)
	{
		$sField = "attached".$i;
		$sDelField = "delAttached".$i;
		$sAttached = $aOldAttached[$i];
		if($_POST[$sDelField] && $sAttached)//仅进行了删除附件操作
		{
			unlink(__NEWS_ATTACHED.$sAttached); // 删除原来对应的附件	
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
		else//修改附件内容
		{
			if($_FILES[$sField]['name'])  // 上传
			{	
				$atta = new pic(__NEWS_ATTACHED);
				$sTemp = $atta->uploadPic($sField,$i);			
				if($sAttached)
				{
					unlink(__NEWS_ATTACHED.$sAttached); // 删除原来对应的附件
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
	
	/**  end 上传附件处理 **/
	
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
			 createHtm(__NEWS_HTM,$_POST['fileName'],$id,$sTbl); // 如果修改的是已审核信息则同时生成新页面	
			 //createHtm(__NEWS_HTM,$aList[$i]['fileName'],$iID,$sTbl)			
			// exit;
		} 
		redirect("pic.php?act=listAll&status=$iStatus&cID=".$_POST['cID'],3,"修改成功！");	
	}
	else 
	{
		redirect("pic.php?act=edit&id=".$id,3,"修改失败！");
	}	
}
elseif ($sAction == "listAll")  // 列表
{
	$cID = isset($_REQUEST['cID']) ? $_REQUEST['cID'] : 0; //栏目
	$iHangyeID = isset($_REQUEST['hangyeID']) ? $_REQUEST['hangyeID'] : 0; //行业
	$sUserName = isset($_REQUEST['userName']) ? $_REQUEST['userName'] : "";
	
	if($cID > 0)
	{
		$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sCatName = "【".category::getCatNameByID($sClass,$cID)."】";				
	}
	elseif($iHangyeID > 0)
	{
		//$sWhere = "cID in".category::getSubID($sClass,$cID);
		$sWhere = "hangyeID = $iHangyeID"; 
		$sCatName = "【".category::getCatNameByID("hangye",$iHangyeID)."】";						
	}
	else 
	{
		$sWhere = "1";
		$sCatName = "所有";
	}
	
	if($_SESSION['xzx_roleID'] == 2) // 如果角色为编辑
	{
		$sWhere .= " AND userName='".$_SESSION['xzx_userName']."'";
	}
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME",$sCatName."图片列表");
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : -1; // -1 代表所有图片
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";	
	
	
	$sWhere .= ($iStatus >=0) ? " AND a.status = '".$iStatus."'" : "";
	$sWhere .= $q ? " AND (a.title like '%$q%' OR a.userName like '%$q%') " : ""; 
	$sWhere .= $sUserName ? " AND a.userName = '$sUserName'" : ""; 
	 
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = isset($_REQUEST['perPage']) ? $_REQUEST['perPage'] : (defined("I_PERPAGE") ? I_PERPAGE : 10);
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
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
	
	// 栏目
	$sOptions = category::getCatOptions($sClass,2,$cID);	// -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	$tpl->assign("sOptions",$sOptions);
	
	$tpl->assign("aList",$aList);
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->assign("bHaveEditPower",$bHaveEditPower);
	$tpl->assign("iPerPage",$iPerpage);
	$tpl->assign("cID",$cID);	
	$tpl->display("admin/news_list.tpl.htm");
}
elseif($sAction == "recycle") // 放入回收站
{	
	$cID = $_REQUEST['cID'];	
	$iStatus = $_REQUEST['status'];	
	$sID = array2Set($_POST['newsID']);	

	$sSQL = "SELECT id,fileName FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // 删除静态页面
	}
	if($db->query("UPDATE $sTbl SET status='2' WHERE id in $sID"))
	{
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"成功放入回收站！");
	}	
	else
	{
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"放入回收站失败！");
	}	
}
elseif($sAction == "uncheck") // 设为未审核
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['newsID']);	
	$sSQL = "SELECT id,fileName FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // 删除静态页面
	}
	if($db->query("UPDATE $sTbl SET status='0' WHERE id in $sID"))
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"成功设为未审核！");
	else
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"设为未审核失败！");
}
elseif($sAction == "del") // 彻底删除
{
	$cID = $_REQUEST['cID'];
	$iStatus = $_REQUEST['status'];
	$sID = array2Set($_POST['newsID']);	
	$sSQL = "SELECT id,fileName,pic FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{
		@unlink(__NEWS_HTM.$aList[$i]['fileName']); // 删除静态页面
		@unlink(__NEWS_PIC.$aList[$i]['pic']);
		@unlink(__NEWS_PIC.$aList[$i]['pic_index']);
	}
	if($db->query("delete FROM $sTbl WHERE id in $sID"))
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"删除成功！");
	else
		redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",5,"删除失败！");		
}
elseif($sAction == "check" || $sAction == "recommend") // 审核或推荐
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

		if(createHtm(__NEWS_HTM,$aList[$i]['fileName'],$iID,$sTbl)) // 生成静态页面
		{
			$db->query("UPDATE $sTbl SET status='$iNewStatus' WHERE id=$iID");
			$iSuc ++;
		}
		else 
			$iErr ++;
	}
	
	
	$sStr = ($sAction == "check") ? "审核" : "推荐";

	redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"{$sStr}成功，页面生成成功数:<font color=blue>".$iSuc."</font>；错误数：<font color=red>".$iErr."</font>！");	
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
	
	//获取发布该信息的编辑人员资料
	$aEditor=$db->getRecordSet("select pic,intro from manager where userName='".$aField['userName']."' ",1);
	$aEditor['intro'] = Str_sub($aEditor['intro'],106);	
	$tpl->assign("aEditor",$aEditor);
	
	//该编辑人员发布的其他信息
	$aEditorOther=news::getNewsList(0,6,0,"userName='".$aEditor['userName']."' ");
	$tpl->assign("aEditorOther",$aEditorOther);
	
	//精品推荐的信息
	$aRecommend = news::getNewsList(0,7,0);
	$tpl->assign("aRecommend",$aRecommend);
	
	//阅读排行信息
	$aReadNum = news::getNewsList(0,7,0,""," click desc ");
	$tpl->assign("aReadNum",$aReadNum);
	
	//五个图片信息
	$aFivePic = news::getNewsList(0,5,0," pic<>'' ","","pic");
	$tpl->assign("aFivePic",$aFivePic);	
	
	$sTmpPic = strstr($aField['content'],"<img");
	
	$tpl->assign("sPageTitle",$aField['title']."-".$aField['catName']."-".__WEBNAME);
	
	
	if ($sTmpPic=="<img")//图片模板
	{	
		$tpl->assign("sTmpPic",$sTmpPic);
		$tpl->display("html/news_detail_pic_shtml.tpl.htm");
	}
	else//文字模板
	{	
		$tpl->display("html/news_detail_word_shtml.tpl.htm");	
	}	
}
elseif($sAction == "makeStatic" && isset($_GET['id'])) // 单个页面生成
{
	$id = $_GET['id'];	
	$aField = $db->getRecordSet("SELECT fileName FROM $sTbl WHERE id=$id",1);
	//print_r($aField);

	if(createHtm(__NEWS_HTM,$aField['fileName'],$id,$sTbl)) // 生成静态页面
	{	
		redirect(__NEWS_HTM.$aField['fileName'],3,"页面生成成功！");
	}
	else
	{
		redirect(__NEWS_HTM.$aField['fileName'],5,"页面生成失败！");
	}
}
elseif($sAction == "copy")//数据转移和复制
{
	$cID = $_REQUEST['cID'];	
	$cID1 = $_REQUEST['cID1'];	//数据处理的栏目
	$iActType = $_REQUEST['actType'];//操作类型 复制/粘贴
	$iStatus = $_REQUEST['status'];	
	//echo $cID1.$iActType.$iStatus;
	//exit;
	$sID = array2Set($_POST['newsID']);	

	$sSQL = "SELECT * FROM $sTbl WHERE id in $sID";
	$aList = $db->getRecordSet($sSQL);
	for($i=0; $i<count($aList); $i++)
	{	//echo $aList
		$aList[$i]["cID"] = $cID1;
		if ($iActType == 1)//复制生成新的静态页面
		{	
			$aList[$i]['id'] = 0;
			$sOldFileName = $aList[$i]['fileName'];//老的文件名称
			//$sNewFileName = str_replace(".htm","",$sOldFileName)."_c".".htm";//生成新的文件名称
			$sNewFileName = str_replace(".shtml","",$sOldFileName)."_c".".shtml";//生成新的文件名称
			$aList[$i]['fileName'] = $sNewFileName;
		
			$db->insert($sTbl,$aList[$i]);
			if ($aList[$i]['status'] == 1 || $aList[$i]['status'] == 3)//如果被复制的数据是已审核或推荐的就生成静态页面
			{
				//直接复制文件，顺便更改文件名称
				copy(__NEWS_HTM.$sOldFileName,__NEWS_HTM.$sNewFileName);
			}
		}
		elseif ($iActType == 2)//转移
		{
			$aList_c[$i]['cID'] = $cID1;
			$db->update($sTbl,$aList_c[$i],"id=".$aList[$i]["id"]);			
		}
	}	
	redirect("pic.php?act=listAll&cID=$cID&status=$iStatus",3,"操作成功！");	
}
else
{
	showError("参数错误");
}
?>