<?php
/**
 * 后台左边菜单模块
 *  2006.11
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php");
require_once("../class/common.inc.php");

loadLib("menu");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "show";
//这里需要判断只有root帐号才能登陆
// 当前位置
$tpl->assign("PAGE_FUNC_BIG_NAME", "界面管理");
$tpl->assign("PAGE_FUNC_BIG_LINK", "menu.php?act=listAll");

$sTbl = "menu";

if($sAction == "show") // 菜单显示
{
	//要选取所有大类和在session权限中的小类
	$sSQL = "SELECT * FROM $sTbl  ORDER BY orderID asc";
	$aList = $db->getRecordSet($sSQL); 
	$aBigAllList = array();
	$aSmallAllList = array();
	for ($i=0; $i<count($aList); $i++)
	{
		if($aList[$i]["pID"] == 0)
			$aBigAllList[] = $aList[$i];
		else 
			$aSmallAllList[] = $aList[$i];
	}
	//已经区分出大类和小雷了
	$k=0;
	for($i=0; $i<count($aBigAllList); $i++)
	{
		$bFlag = false;
		for($j=0; $j<count($aSmallAllList) && !$bFlag; $j++)
		{
			if($aBigAllList[$i]["id"] == $aSmallAllList[$j]["pID"])
				$bFlag = true;
		}
		if($bFlag)
		{
			$aBigNeedList[$k] = $aBigAllList[$i];
			$k++;
		}
	}
	//print_r($aBigNeedList);
	//print_r($aSmallAllList);
	
	$tpl->assign("isRootLogin", ($_SESSION['xzx_userName'] == 'admin') ? 1 : 0);
	$tpl->assign("aBigList",$aBigNeedList);
	$tpl->assign("iBigCatNum", count($aBigNeedList));
	$tpl->assign("aSmallAllList",$aSmallAllList);
	$tpl->display("admin/menu.tpl.htm");
}
elseif($sAction == "add") // 菜单添加
{	
	$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
	$tpl->assign("pid",$pid);
	
/*	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList(1);  //权限*/
	$aMenuList = menu::getMenuList(0);	
	$tpl->assign("aMenuList",$aMenuList);
	$tpl->assign("pid",$pid);
//	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME","添加左边菜单");
	$tpl->display("admin/menu_add.tpl.htm");		
}
elseif($sAction == "addSave")
{
	$aField['pID'] = $_POST['pID'];
	$aField['name'] = $_POST['name'];	
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($aField['pID'] > 0) //
	{
		$aField['url']  = $_POST['url'];
		$aField['powerID'] = $_POST['powerID'];
	}
	$id = $db->insert("menu",$aField);
	if($id > 0)
	{
		$aField['orderID'] = $id;
		$db->update($sTbl,$aField," id =$id");
		//redirect("menu.php?act=listAll",3,"添加成功！");
		redirect("menu.php?act=add&pid=".$aField['pID'],1,"添加成功！");
	}	
	else
	{
		redirect("menu.php?act=add",2,"添加失败！");
	}	
}
elseif($sAction == "edit" & isset($_GET['id'])) // 菜单修改
{	
	$id = $_GET['id'];
/*	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList(1);  //权限*/
	$aMenuList = menu::getMenuList(0);
	
	$aInfo = $db->getRecordSet("SELECT * FROM $sTbl WHERE id = $id",1); 
		
	$tpl->assign("aMenuList",$aMenuList);
	$tpl->assign("aInfo",$aInfo);
//	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME","修改左边菜单");
	$tpl->display("admin/menu_edit.tpl.htm");		
}
elseif($sAction == "editSave" && isset($_POST['id']))  // 菜单修改保存
{
	$id = $_POST['id'];
	
	$aField['pID'] = $_POST['pID'];
	$aField['name'] = $_POST['name'];	
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($aField['pID'] > 0) //
	{
		$aField['url']  = $_POST['url'];
		$aField['powerID'] = $_POST['powerID'];
	}
	
	if($db->update($sTbl,$aField,"id = $id"))		
	{
		//echo "ok";
		redirect("menu.php?act=listAll&pid=".$aField['pID'],3,"修改成功！");	
		
	}	
	else
		redirect("menu.php?act=edit&id=$id",5,"修改失败！");
}
elseif ( $sAction == "del" )
{
	$id = $_GET['id'];
	if($db->query("delete FROM $sTbl WHERE id=$id or PID=$id "))
	{
		redirect("menu.php?act=listAll",2,"删除成功！");
	}
	else 
	{
		redirect("menu.php?act=listAll",2,"删除失败！");
	}
	
}
elseif($sAction == "listAll") // 左边菜单列表
{
	$pid = (isset($_GET['pid']))? $_GET['pid'] : 0;
	$aList = menu::getMenuList($pid);
	for($i=0; $i<count($aList); $i++)		
	{
		$id = $aList[$i]['id'];
		if($pid == 0 || $pid == $id) 
  			$aList[$i]['name'] = "<a href='menu.php?act=listAll&pid=$id'><font color=red><b>".$aList[$i]['name']."</b></font></a>";
  		else 
  			$aList[$i]['name'] = "&nbsp;&nbsp;&raquo;&nbsp;".$aList[$i]['name'];
	}	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "左边菜单列表");
	$tpl->assign("aList",$aList);
	$tpl->assign("pid",$pid);
	$tpl->display("admin/menu_list.tpl.htm");
}
elseif($sAction == "changeOrder" && $_POST['orderID']) // 更改排序
{
	$pid = (isset($_GET['pid'])) ? $_GET['pid'] : 0;
	$aOrderID = $_POST['orderID'];
	$aID 	  = $_POST['id'];
	//print_r($aOrderID);
	for($i=0; $i<count($aOrderID); $i++)
	{
		$aField['orderID'] = $aOrderID[$i];
		$db->update($sTbl,$aField,"id=".$aID[$i]);
	}
	//exit;
	redirect("menu.php?act=listAll&pid=$pid",3,"更改成功！");
}
else
{
	showError("参数错误！");
}
?>