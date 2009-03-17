<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$sCheckCode = $_POST['validateCode2'];
$arr = array(
	'userName' =>  $_POST['login_name'],
	'password' =>  $_POST['login_pwd'],
);


if(!empty($arr["login_name"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
{
	checkUserLogin($arr);
}



$tpl->display("reart/login.html");
?>