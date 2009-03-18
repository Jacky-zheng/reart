<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$msg = checkMessage($_SESSION["reart_id"]);
$tpl->assign("msg",$msg);

$tpl->display("reart/contact_us.html");
?>