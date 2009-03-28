<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$about_msg = getConsultation();

$tpl->assign("about_msg",$about_msg);
if ("en" == $_GET["language"])
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","Favorites investment advisory");
	$tpl->display("reart/consultation.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","投资收藏咨询");
	$tpl->display("reart/consultation.html");
}
?>