<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");

loadLib("work");
$work = new work();

$tpl->assign("cate",$work->getCatelog());
$tpl->assign("price",$work->getPrice());
if ($_GET['language'] == 'en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","index");
	$tpl->display("reart_en/index.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign("title","首页");
	$tpl->display("reart/index.html");
}
?>