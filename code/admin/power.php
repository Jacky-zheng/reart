<?php
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("power", $sAction);		//权限检查
$tpl->assign("PAGE_FUNC_BIG_LINK", "power.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "权限管理");
$tpl->assign("HELP","help.php?id=3");


loadLib("power");
$power = new power();

//权限列表
if($sAction == "listAll")
{
	$iStatus = isset($_REQUEST['status']) ? $_REQUEST['status'] : 1;
	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
	$sFileNameEn = isset($_GET['fileNameEn']) ? $_GET['fileNameEn'] : "";
	
	$sWhere = ($iStatus >=0) ? "status = '$iStatus'" : "1";
	$sWhere .= ($q) ? " AND (fileNameCn like '%$q%' OR powerNameCn like '%$q%' OR fileNameEn like '%$q%' OR powerNameEn like '%$q%')" : "";
	$sWhere .= ($sFileNameEn) ? " AND fileNameEn = '$sFileNameEn'" : "";
	
	$iNowPage = empty($_REQUEST["pageNo"]) ? 1 : intval($_REQUEST["pageNo"]); 
	$iPerpage = defined("I_PERPAGE") ? I_PERPAGE : 10;
	$iStartNo = ($iNowPage - 1) * $iPerpage;
	//得到总数目
	$iTotalNum = $db->getRowsNum("SELECT COUNT(id) FROM `power` WHERE {$sWhere}");
	$sSQL = "SELECT * FROM `power` WHERE {$sWhere}  LIMIT {$iStartNo}, $iPerpage";
	$aList = $db->getRecordSet($sSQL);
	$tpl->assign("aList", $aList);
	dividePage("power.php", $iTotalNum, $iPerpage, $iNowPage, "act=listAll");
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "权限列表");
	$tpl->assign("iStatus",$iStatus);
	$tpl->assign("q",$q);
	$tpl->display("admin/power_listAll.tpl.htm");
}
//添加新权限
elseif ($sAction == "add")
{
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "添加权限");	
	$aStatusValue = array("1","0");
	$aStatusName = array("开启", "关闭");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->display("admin/power_add.tpl.htm");	
}
//保存添加的权限
elseif($sAction == "addSave")
{
	$aField["fileNameCn"]	= $_POST["text_fileNameCn"];
	$aField["fileNameEn"]	= $_POST["text_fileNameEn"];
	$aField["powerNameCn"] = $_POST["text_powerNameCn"];
	$aField["powerNameEn"]	= $_POST["text_powerNameEn"];
	$aField["status"] = $_POST["radio_status"];
	
	//这里暂时不检查功能，模快是否存在
	if($db->insert('power', $aField))
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "执行保存添加权限功能",1);
		//redirect("power.php?act=listAll",3, "成功添加".$aField["fileNameCn"]."--".$aField["powerNameCn"]."权限");
		redirect("power.php?act=add",1, "成功添加".$aField["fileNameCn"]."--".$aField["powerNameCn"]."权限");
	}
	else 
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "执行保存添加权限功能",0);
		redirect("power.php?act=listAll",5, "添加".$aField["fileNameCn"]."--".$aField["powerNameCn"]."失败");
	}
}
//编辑权限
elseif ($sAction == "modify")
{
	if(!isset($_GET["id"]))
		redirect("power.php?act=listAll", 5, "错误的参数");
	$aStatusValue = array("1","0");
	$aStatusName = array("开启", "关闭");
	$aInfo = $power->getPowerInfoByID($_GET["id"]);
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("aInfo", $aInfo);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "编辑权限");	
	$tpl->display("admin/power_modify.tpl.htm");	
}
//保存编辑的权限
elseif($sAction == "modifySave")
{
	$aField["fileNameCn"]	= $_POST["text_fileNameCn"];
	$aField["fileNameEn"]	= $_POST["text_fileNameEn"];
	$aField["powerNameCn"] = $_POST["text_powerNameCn"];
	$aField["powerNameEn"]	= $_POST["text_powerNameEn"];
	$aField["status"] = $_POST["radio_status"];
	
	$iPowerID = $_POST["powerID"];
	
	//这里暂时不检查功能，权限是否存在
	if($db->update('power', $aField, " id=".$iPowerID))
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "执行保存编辑权限功能",1);
		redirect("power.php?act=listAll",3, "成功编辑权限");
	}
	else 
	{
		log::insertLog($_SESSION["xzx_uID"], "power", $sAction, "执行保存编辑权限功能",0);
		redirect("power.php?act=listAll",3, "编辑失败");
	}
}
elseif ($sAction == "close")
{
	$aField = array();
	$aField["status"] = '0';
	$db->update("power", $aField, "id = ".$_GET["id"]);
	redirect("power.php?act=listAll", 3, "成功关闭权限");
	//这里要更改相关的 角色表数据
}
elseif ($sAction == "open")
{
	$aField = array();
	$aField["status"] = '1';
	$db->update("power", $aField, "id = ".$_GET["id"]);
	redirect("power.php?act=listAll", 3, "成功开启权限");
}
?>