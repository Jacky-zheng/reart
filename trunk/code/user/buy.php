<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

//$about_msg = getAboutUs();
//$tpl->assign("about_msg",$about_msg);
$tpl->assign("title","作品购买");
$tpl->display("reart/buy.html");
?>