<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$action = $_GET["action"];
$sCheckCode = $_POST['validateCode2'];
if ("en" == $_GET["language"])
{
	$msg = checkMessage($_SESSION["reart_id"],"en");
	$tpl->assign("msg",$msg);
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
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
			redirect_error("Advice is not null！");
		}
		if (!empty($arr_msg["content"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
		{
			$insertMsg = insertMsg($arr_msg);
			if (!empty($insertMsg))
			{
				echo "<script>alert('Advice success！');</script>";
			}
			else 
			{
				echo "<script>alert('Advice failure！');</script>";
			}
		}
		else 
		{
			redirect_error("Verification Code Error！");
		}
		gotoPage("/user/contact_us.php?language=en");
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
				gotoPage("/user/contact_us.php?language=en");
			}
			else 
			{
				redirect_error("User is not exist");
			}
		}
	}
	$tpl->assign("title","Contact Us");
	$tpl->display("reart_en/contact_us.html");
}
else 
{
	$msg = checkMessage($_SESSION["reart_id"],"ch");
	$tpl->assign("msg",$msg);
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	if ('submit' == $action)
	{
		$id = !empty($_SESSION["reart_id"])?$_SESSION["reart_id"]:"";
		$arr_msg = array(
			'content' =>  $_POST["content"],
			'addDate' => date("Y-m-d H:i:s"),
			'userID' => $id,
			'type' => $_POST["type"],
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
	$tpl->assign("title","联系我们");
	$tpl->display("reart/contact_us.html");
}
?>