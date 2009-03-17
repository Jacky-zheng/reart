<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$sCheckCode = $_POST['validateCode2'];
$arr = array(
	'userName' =>  $_POST['login_name'],
	'password' =>  $_POST['login_pwd'],
);
$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
{
	checkUserLogin($arr);
}


$tpl->display("reart/login.html");
?>