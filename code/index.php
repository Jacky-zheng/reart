<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");

loadLib("work");
$work = new work();

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$tpl->assign("cate",$work->getCatelog());
	$tpl->display("reart/index.html");

?>