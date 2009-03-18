<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$sCheckCode = $_POST['validateCode2'];
//$reurl = empty($_GET['reurl'])?"":$_GET['reurl'];
$arr = array(
	'userName' =>  $_POST['login_name'],
	'password' =>  $_POST['login_pwd'],
	//'reurl' => $reurl,
);
echo $_GET['reurl'];
$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
{
	$check = checkUserLogin($arr);
	if ($check)
	{
		if (!empty($_GET['reurl']))
		{
			gotoPage($_GET['reurl']);
		}
		else 
		{
			gotoPage("/user/login_index.php");
		}
	}
	else 
	{
		redirect_error("该用户不存在！");
	}
}


$tpl->display("reart/login.html");
?>