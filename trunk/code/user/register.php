<?php
require_once("../class/common.inc.php");
require_once("../config.php");
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

if ( empty($arr["userName"]) || !checkNameRepeat($arr["userName"]) ) 
{
	setcookie("name",$arr["userName"],0,__URL);
}
if ( $_POST["pwd"] == $arr["confirm_pwd"] ) 
{
	setcookie("pwd",$arr["pwd"],0,__URL);
}
if ( empty($arr["email"]) || !checkEmail($arr["email"]) ) 
{
	setcookie("email",$arr["email"],0,__URL);
}
if ( !is_numeric($arr["phone"]) ) 
{
	setcookie("phone",$arr["phone"],0,__URL);
}

if ( !empty($arr["userName"]) && checkNameRepeat($arr["userName"]) && checkEmail($arr["email"]) && is_numeric($arr["phone"]) )  
{
	$reg = insert("member", $arr);
	if (!empty($reg))
	{
		header("Location:/user/login.php");
	}
	else 
	{
		header("Location:/user/login.php");
	}
}
else 
{
	header("Location:/user/login.php");
}

?>