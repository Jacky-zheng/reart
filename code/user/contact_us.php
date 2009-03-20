<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$msg = checkMessage($_SESSION["reart_id"]);
$tpl->assign("msg",$msg);

$action = $_GET["action"];
$sCheckCode = $_POST['validateCode2'];
if ('submit' == $action)
{
	$id = !empty($_SESSION["reart_id"])?$_SESSION["reart_id"]:"";
	$arr_msg = array(
		'content' =>  $_POST["content"],
		'addDate' => date("Y-m-d H:i:s"),
		'userID' => $id,
	);
	if (empty($arr_msg["content"]))
	{
		redirect_error("建议不能为空！");
	}
	if (!empty($arr_msg["content"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		$insertMsg = insertMsg($arr_msg);
		if (!empty($insertMsg))
		{
			echo "<script>alert('建议提交成功！');</script>";
		}
		else 
		{
			echo "<script>alert('建议提交失败！');</script>";
		}
	}
	else 
	{
		redirect_error("验证码错误！");
	}
	gotoPage("/user/contact_us.php");
}
else 
{
	$arr = array(
	'userName' =>  $_POST['login_name'],
	'password' =>  $_POST['login_pwd'],
	);
	if(!empty($arr["userName"]))
	{
		$check = checkUserLogin($arr);
		if ($check)
		{
			gotoPage("/user/contact_us.php");
		}
		else 
		{
			redirect_error("该用户不存在！");
		}
	}
}

$tpl->display("reart/contact_us.html");
?>