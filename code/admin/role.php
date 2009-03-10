<?php
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "listAll";
checkExecPower("role", $sAction);		//权限检查

$tpl->assign("PAGE_FUNC_BIG_LINK", "role.php");
$tpl->assign("PAGE_FUNC_BIG_NAME", "角色管理");
$tpl->assign("HELP","help.php?id=3");

loadLib("role");
loadLib("power");
$role = new role();
$power = new power();

//角色列表
if($sAction == "listAll")
{
	$sWhere = isset($_GET["status"]) ? "status = '".$_GET["status"]."'" : "1";
	$sSQL = "SELECT * FROM `role` WHERE {$sWhere}";
	$aList = $db->getRecordSet($sSQL);	
	//$rk表示array key ,rv 表示array value
	for($i = 0 ; $i < count($aList); $i++)
	{
		$aList[$i]["powerID"] = unserialize($aList[$i]["powerID"]);
		$sTable = "";
		for($j = 0; $j <count($aList[$i]["powerID"]); $j++)
		{
			$aName = power::getPowerNameByID($aList[$i]["powerID"][$j]);
			//TO DO 已经关闭的功能变成灰色
			if($k == 3) $k = 0;
			if($k == 0) $sTable .= "<tr bgcolor=#FFFFFF>\n";
			$sTable .= "<td bgcolor=#FFFFFF>".$aName["fileNameCn"]."--".$aName["powerNameCn"]."</td>";
			$k++;
			if($k == 3) $sTable .= "</tr>\n";
			//$aList[$i]["powerName"] = $aName["fileNameCn"]."--".$aName["powerNameCn"]."&uarr;&nbsp;&nbsp;";
			$aList[$i]["powerNameTable"] = $sTable;
		}
	}
	//print_r($aPowerName);
	$tpl->assign("aList", $aList);
	//$tpl->assign("aPowerName",$aPowerName);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "角色列表");
	$tpl->display("admin/role_listAll.tpl.htm");
}
//添加新角色
elseif ($sAction == "add")
{
	$aPowerList = $power->getPowerList(1);
	$tpl->assign("aPowerList", $aPowerList);
	$aStatusValue = array("1","0");
	$aStatusName = array("开启", "关闭");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "添加角色");
	$tpl->display("admin/role_add.tpl.htm");	
}
//保存添加的角色
elseif($sAction == "addSave")
{
	$aField["name"]	= $_POST["text_roleName"];
	$aField["description"] = $_POST["text_description"];
	$aField["powerID"]	= serialize($_POST["powerID"]);
	$aField["status"] = $_POST["radio_status"];
		
	//检查角色名是否存在
	$bRoleIsExists = $db->getRowsNum("SELECT id FROM `role` WHERE name='".$aField["name"]."'");
	if(!$bRoleIsExists)
	{
		//角色不存在
		if($db->insert('role', $aField))
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "执行保存添加角色功能",1);
			redirect("role.php?act=listAll",3, "成功添加".$aField["name"]."角色");
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "执行保存添加角色功能",0);
			redirect("role.php?act=add", 5, "添加".$aField["name"]."失败！");
		}
	}
	else 
		redirect("role.php?act=add", 5, "用户名".$aField["name"]."已经存在，添加失败！");	
}
//编辑角色
elseif ($sAction == "modify")
{
	if(!isset($_GET["id"]))
		redirect("role.php?act=listAll", 5, "参数错误");
	$aInfo = $role->getRoleInfoByID($_GET["id"]);
	$aInfo["powerID"] = unserialize($aInfo["powerID"]);
	$tpl->assign("aInfo", $aInfo);
	$aStatusValue = array("1","0");
	$aStatusName = array("开启", "关闭");
	$tpl->assign("aStatusValue", $aStatusValue);
	$tpl->assign("aStatusName", $aStatusName);
	$tpl->assign("powerID", $aInfo["powerID"]);
	$aPowerList = $power->getPowerList();
	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "编辑角色");
	$tpl->display("admin/role_modify.tpl.htm");	
}
//保存编辑的角色
elseif($sAction == "modifySave")
{
	$aField["name"]	= $_POST["text_roleName"];
	$aField["description"] = $_POST["text_description"];
	$aField["powerID"]	= serialize($_POST["powerID"]);
	$aField["status"] = $_POST["radio_status"];
	
	$iRoleID = $_POST["roleID"];
	//检查角色名是否存在
	$bRoleIsExists = $db->getRowsNum("SELECT id FROM `role` WHERE name='".$aField["name"]."' AND id <> ".$iRoleID);
	if(!$bRoleIsExists)
	{
		//角色不存在
		if($db->update('role', $aField, " id=".$iRoleID))
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "执行保存编辑角色功能",1);
			redirect("role.php?act=listAll",3, "成功编辑".$aField["name"]."角色");
		}
		else 
		{
			log::insertLog($_SESSION["xzx_uID"], "role", $sAction, "执行保存编辑角色功能",0);
			redirect("role.php?act=modify&id=".$iRoleID, 5, "编辑".$aField["name"]."失败！");
		}
	}
	else 
		redirect("role.php?act=modify&id=".$iRoleID, 5, "角色名".$aField["name"]."已经存在，编辑失败！");	
}
elseif ($sAction == "close")
{
	$aField = array();
	$aField["status"] = '0';
	$db->update("role", $aField, "id = ".$_GET["id"]);
	redirect("role.php?act=listAll", 3, "成功关闭角色");
}
elseif ($sAction == "open")
{
	$aField = array();
	$aField["status"] = '1';
	$db->update("role", $aField, "id = ".$_GET["id"]);
	redirect("role.php?act=listAll", 3, "成功开启角色");
}
?>