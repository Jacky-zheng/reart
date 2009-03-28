<?php
require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$user_id = $_SESSION["reart_id"];

$data = getUserInfo($user_id);

$tpl->assign("data",$data);
if ("en" == $_GET["language"])
{	
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","Member center");
	$tpl->display("reart_en/login_index.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
		
	$tpl->assign("title","睿艺用户中心");
	$tpl->display("reart/login_index.html");
}
?>