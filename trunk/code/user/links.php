<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$links = getLinks();

$tpl->assign("linklist",$links);
if ("en" == $_GET["language"])
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","Links");
	$tpl->display("reart_en/links.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","友情链接");
	$tpl->display("reart/links.html");
}

?>