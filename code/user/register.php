<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$arr = array(
	'userName' => $_POST["userName"] ,
	'pwd' => md5($_POST["pwd"]) ,
	//'confirm_pwd' => $_POST["confirm_pwd"] ,
	'email' => $_POST["email"] ,
	'trueName' =>  $_POST["trueName"] ,
	'phone' => $_POST["phone"] ,
	'address' => $_POST["address"] ,
	'addDate' => date("Y-m-d h:i:s",time()) ,
	'loginIp' => getIP(),
	'addDate' => date("Y-m-d H:i:s"),
	'loginDate' => date("Y-m-d H:i:s"),
);
$sCheckCode = $_POST['validateCode1'];

if ("en" == $_GET["language"])
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		if ( !checkNameRepeat($arr["userName"]) )
		{
			redirect_error("Username is exist！");
		}
		if ( $_POST["pwd"] != $_POST["confirm_pwd"] )
		{
			redirect_error("Password do not match！");
		}
		if ( empty($arr["email"]) || !checkEmail($arr["email"]) )
		{
			redirect_error("The email is not null or format error！");
		}
		if ( !is_numeric($arr["phone"]) )
		{
			redirect_error("Please input number！");
		}
	
		if ( !empty($arr["userName"]) && checkNameRepeat($arr["userName"]) && checkEmail($arr["email"]) && is_numeric($arr["phone"]) )
		{
			checkRegister($arr);
		}
		else
		{
			redirect_error("Register failure！");
		}
	}
	else
	{
		redirect_error("Verification Code Error！");
	}
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		if ( !checkNameRepeat($arr["userName"]) )
		{
			redirect_error("该用户名已经存在！");
		}
		if ( $_POST["pwd"] != $_POST["confirm_pwd"] )
		{
			redirect_error("两次输入的密码不一致！");
		}
		if ( empty($arr["email"]) || !checkEmail($arr["email"]) )
		{
			redirect_error("邮箱为空或者邮箱格式错误！");
		}
		if ( !is_numeric($arr["phone"]) )
		{
			redirect_error("电话号码请填写数字");
		}
	
		if ( !empty($arr["userName"]) && checkNameRepeat($arr["userName"]) && checkEmail($arr["email"]) && is_numeric($arr["phone"]) )
		{
			checkRegister($arr);
		}
		else
		{
			redirect_error("注册失败！");
		}
	}
	else
	{
		redirect_error("验证码错误！");
	}
}





?>