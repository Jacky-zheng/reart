<?php
/**
 * 类别模块
 * @author xiongzhixin (xzx747@sohu.com) 2007-06-25
 */

//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
$sAction = isset($_REQUEST["act"]) ? $_REQUEST["act"] : "listAll";
checkExecPower("category", $sAction);		//权限检查
loadLib("category");
$sTbl = isset($_GET['tbl']) ? $_GET['tbl'] : "hangye";
$aTbl = array("hangye"=>"行业","area"=>"地区","news_class"=>"资讯","product_class"=>"产品系列");

$sCatName = $aTbl[$sTbl];

$tpl->assign("PAGE_FUNC_BIG_LINK", "category.php?tbl=$sTbl");
$tpl->assign("PAGE_FUNC_BIG_NAME", "类别管理");
$tpl->assign("sTbl",$sTbl);

if($sAction == "createJS") // 生成js
{
	$aPCatList = category::pCatList($sTbl);
	$iPCatNum = count($aPCatList);
	//print_r($aPCatList);exit;
	$sStr="var pCatName = new Array($iPCatNum);
var pCatID = new Array($iPCatNum);
var subCatName = new Array($iPCatNum);
var subCatID = new Array($iPCatNum);
";
	//echo $sStr;exit;
	
	for($i=1; $i<=$iPCatNum; $i++)
	{
		$ii = $i -1;
		$pID = $aPCatList[$ii]['id'];
		$sStr.="pCatName[$i]='".$aPCatList[$ii][name]."';
pCatID[$i]=$pID;
";
		$aSubCatList = category::subCatListByID($sTbl,$pID,0);
		$iSubCatNum = count($aSubCatList);
		$sStr .="subCatName[$i] = new Array($iSubCatNum);
subCatID[$i] = new Array($iSubCatNum);
";
		for($j=1; $j<=count($aSubCatList); $j++)
		{
			$jj = $j -1;
			$sStr.="subCatName[$i][$j]='".$aSubCatList[$jj][name]."';
subCatID[$i][$j]=".$aSubCatList[$jj][id].";
";   	
		}		
	}
	
	//echo $sStr; exit;
	$sFileName="../js/".$sTbl.".js";
	//echo $sFileName;
	$fp=fopen($sFileName,"w"); 
	if(fwrite($fp,$sStr))	
		redirect("category.php?act=listAll&tbl=$sTbl",3,"生成成功！");	
	else 
		redirect("category.php?act=listAll&tbl=$sTbl",3,"生成失败！");
	fclose($fp);		
}
elseif($sAction == "add") // 类别添加
{
	$pID = isset($_GET['pID']) ? $_GET['pID'] : 0;
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加".$sCatName."类别");
	
	$sOptions = category::getCatOptions($sTbl,2); // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	
	$tpl->assign("pID",$pID);
	$tpl->assign("sOptions",$sOptions);
	$tpl->display("admin/category_add.tpl.htm");
}
elseif($sAction == "addSave") //类别添加保存
{	
	$aField['name'] = $_POST['name'];
	$aField['intro'] = $_POST['intro'];
	$aField['pID'] = $_POST['pID'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	$id = $db->insert($sTbl,$aField);
		
	if($id > 0)
	{
		$aField['orderID'] = $id;
		$db->update($sTbl,$aField,"id=$id");
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],3,"添加成功！");
	}		
	else
	{
		redirect("category.php?act=add&tbl=$sTbl&pID=".$_POST['pID'],5,"添加失败！");
	}
}
elseif($sAction == "edit" && isset($_GET['id'])) // 类别修改
{
	$id = $_GET['id'];
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "修改".$sCatName."类别");
	$aField = $db->getRecordSet("SELECT * FROM $sTbl WHERE id=$id",1);
	$sOptions = category::getCatOptions($sTbl,1,$aField['pID']);	 // -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推	
	
	$tpl->assign("aField",$aField);
	$tpl->assign("sOptions",$sOptions);	
	$tpl->display("admin/category_edit.tpl.htm");
}
elseif($sAction == "editSave" && isset($_POST['id'])) // 类别修改保存
{
	$id = $_POST['id'];
	$aField['name'] = $_POST['name'];
	$aField['intro'] = $_POST['intro'];
	$aField['pID'] = $_POST['pID'];
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($db->update($sTbl,$aField,"id=$id"))
		redirect("category.php?act=listAll&tbl=$sTbl",3,"修改成功！");
	else
		redirect("category.php?act=listAll&tbl=$sTbl",5,"修改失败！");
}
elseif($sAction == "listAll") // 类别列表
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", $sCatName."类别列表");
	$pID = isset($_GET['pID'])? $_GET['pID'] : 0;
	$iCorporationID = intval($_GET['corporationID']);
	$aList = category::subCatListByID($sTbl,$pID,1,$iCorporationID);
	for($i=0; $i<count($aList); $i++)		
	{
		$id = $aList[$i]['id'];
		if($pID == 0 || $pID == $id) 
  			$aList[$i]['name'] = "<a href='category.php?act=listAll&tbl=$sTbl&pID=$id'><font color=red><b>".$aList[$i]['name']."</b></font></a>";
  		else 
  			$aList[$i]['name'] = "&nbsp;&nbsp;&raquo;&nbsp;<a href='category.php?act=listAll&tbl=$sTbl&pID=$id'>".$aList[$i]['name']."</a>";
  		if($sTbl == "product_class")
  		{
  			$aField = $db->getRecordSet("select companyName from corporation where id= ".$aList[$i]['corporationID'],1);  			
  			$aList[$i]['companyName'] = $aField['companyName'];
  		}
	}
	
	//print_r($aList);
	
	$tpl->assign("aList",$aList);
	$tpl->assign("pID",$pID);
	$tpl->display("admin/category_list.tpl.htm");
}
elseif($sAction == "changeOrder" && $_POST['orderID']) // 更改排序
{
	$pID = (isset($_GET['pID'])) ? $_GET['pID'] : 0;
	$aOrderID = $_POST['orderID'];
	$aID 	  = $_POST['id'];
	//print_r($aOrderID); print_r($aID);
	
	for($i=0; $i<count($aOrderID); $i++)
	{
		$aField['orderID'] = $aOrderID[$i];
		$db->update($sTbl,$aField,"id=".$aID[$i]);
	}
	//exit;
	redirect("category.php?act=listAll&pID=$pID",3,"更改成功！");
}
else
{
	showError("参数错误！");
}
?>