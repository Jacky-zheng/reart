<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$sCheckCode = $_POST['validateCode2'];

$arr = array(
	'userName' =>  $_POST['login_name'],
	'password' =>  $_POST['login_pwd'],
);

$reurl = $_GET['reurl'];
$tpl->assign("reurl",$reurl);

if ("en" == $_GET["language"])
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		$check = checkUserLogin($arr);
		if ($check)
		{
			if (!empty($_POST["reurl_return"]))
			{
				gotoPage($_POST["reurl_return"]);
			}
			else 
			{
				gotoPage("/user/login_index.php?language=en");
			}
		}
		else 
		{
			redirect_error("User is not exist,please register！");
		}
	}
	$tpl->assign("title","Login/Register");
	$tpl->display("reart_en/login.html");
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		$check = checkUserLogin($arr);
		if ($check)
		{
			if (!empty($_POST["reurl_return"]))
			{
				gotoPage($_POST["reurl_return"]);
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
	$tpl->assign("title","会员登录/注册");
	$tpl->display("reart/login.html");
}
?>