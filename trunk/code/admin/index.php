<?php
session_start();
//这里简单的判断一下用户是否登陆
if(isset($_SESSION["xzx_uID"]))
	header("Location:login.php");
else 
	header("Location:main.php");
?>