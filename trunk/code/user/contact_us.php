<?php
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$msg = checkMessage($_SESSION["reart_id"]);
$tpl->assign("msg",$msg);

$sCheckCode = $_POST['validateCode2'];
if ('submit' == $action)
{
	$id = !empty($_SESSION["reart_id"])?$_SESSION["reart_id"]:"";
$arr_msg = array(
	'content' =>  $_POST["msg"],
	'addDate' => date("Y-m-d H:i:s"),
	'userID' => $id,
	);
	if (empty($arr_msg["msg"]))
	{
		redirect_error("���鲻��Ϊ�գ�");
	}
	if (!empty($arr_msg["msg"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
	{
		print_r($_POST);
	//	$insertMsg = insertMsg($arr_msg);
	//	if (!empty($insertMsg))
	//	{
	//		redirect_error("�����ύ�ɹ���");
	//	}
	//	else 
	//	{
	//		redirect_error("�����ύʧ�ܣ�");
	//	}
	}
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
			redirect_error("���û������ڣ�");
		}
	}
}

$tpl->display("reart/contact_us.html");
?>