<?php
require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$user_id = $_SESSION["reart_id"];
$arr = array(
	'trueName' => $_POST["trueName"] ,
	'email' =>  $_POST["email"],
	'phone' =>  $_POST["phone"],
	'address' =>  $_POST["address"],
);

if ("en" == $_GET["language"])
{
	$check_login = checkUserState($user_id,"en");
	$tpl->assign("check_login",$check_login);
	if ( checkEmail($arr["email"]) && is_numeric($arr["phone"]))
	{
		if (empty($arr["trueName"]))
		{
			redirect_error("True name is not null！");
		}
		$mod = $db->update("member", $arr, " id='".$_SESSION["reart_id"]."'");
		if ($mod)  
		{
			redirect_error("Modify information success！");
		}
		else 
		{
			redirect_error("Modify information failure！");
		}
	}	
	$data = getUserInfo($user_id);
	$tpl->assign("data",$data);
	$tpl->assign("title","Modify information");
	$tpl->display("reart_en/mod_user_info.html");
}
else 
{
	$check_login = checkUserState($user_id,"ch");
	$tpl->assign("check_login",$check_login);
	if ( checkEmail($arr["email"]) && is_numeric($arr["phone"]))
	{
		if (empty($arr["trueName"]))
		{
			redirect_error("真实姓名不能为空！");
		}
		$mod = $db->update("member", $arr, " id='".$_SESSION["reart_id"]."'");
		if ($mod)  
		{
			redirect_error("信息修改成功！");
		}
		else 
		{
			redirect_error("信息修改败！");
		}
	}
	
	$data = getUserInfo($user_id);
	
	$tpl->assign("data",$data);
	$tpl->assign("title","修改个人信息");
	$tpl->display("reart/mod_user_info.html");
}
?>