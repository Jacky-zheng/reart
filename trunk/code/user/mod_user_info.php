<?php
require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");

$user_id = $_SESSION["reart_id"];
$arr = array(
	'trueName' => $_POST["trueName"] ,
	'email' =>  $_POST["email"],
	'phone' =>  $_POST["phone"],
	'address' =>  $_POST["address"],
);

if ( checkEmail($arr["email"]) && is_numeric($arr["phone"]))
{
	if (empty($arr["trueName"]))
	{
		redirect_error("��ʵ��������Ϊ�գ�");
	}
	$mod = $db->update("member", $arr, " id='".$_SESSION["reart_id"]."'");
	if ($mod)  
	{
		redirect_error("��Ϣ�޸ĳɹ���");
	}
	else 
	{
		redirect_error("��Ϣ�޸İܣ�");
	}
}

$data = getUserInfo($user_id);

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

$tpl->assign("data",$data);
$tpl->display("reart/mod_user_info.html");
?>