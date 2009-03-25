<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");

loadLib("work");
$work = new work();

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$tpl->assign("cate",$work->getCatelog());
$tpl->assign("price",$work->getPrice());
$tpl->assign("title","首页");
$tpl->display("reart/index.html");

?>