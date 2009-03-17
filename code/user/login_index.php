<?php
require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$user_id = $_SESSION["reart_id"];

$data = getUserInfo($user_id);

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

$tpl->assign("data",$data);
$tpl->display("reart/login_index.html");
?>