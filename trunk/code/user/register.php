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
);
$sCheckCode = $_POST['validateCode1'];

if(!empty($arr["userName"]) && $sCheckCode == $_SESSION["xzx_checkCode"])
{
	if ( !checkNameRepeat($arr["userName"]) )
	{
		redirect_error("���û����Ѿ����ڣ�");
	}
	if ( $_POST["pwd"] == $_POST["confirm_pwd"] )
	{
		redirect_error("������������벻һ�£�");
	}
	if ( empty($arr["email"]) || !checkEmail($arr["email"]) )
	{
		redirect_error("����Ϊ�ջ��������ʽ����");
	}
	if ( !is_numeric($arr["phone"]) )
	{
		redirect_error("�绰��������д����");
	}

	if ( !empty($arr["userName"]) && checkNameRepeat($arr["userName"]) && checkEmail($arr["email"]) && is_numeric($arr["phone"]) )
	{
		checkRegister($arr);
	}
	else
	{
		redirect_error("ע��ʧ�ܣ�");
	}
}
else
{
	redirect_error("��֤�����");
}



?>