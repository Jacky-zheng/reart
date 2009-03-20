<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

$about_msg = getConsultation();

$tpl->assign("about_msg",$about_msg);

$tpl->display("reart/consultation.html");
?>