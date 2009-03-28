<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

//$about_msg = getAboutUs();
//$tpl->assign("about_msg",$about_msg);
if ("en" == $_GET["language"])
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","Buy");
	$tpl->display("reart_en/buy.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","作品购买");
	$tpl->display("reart/buy.html");
}

?>