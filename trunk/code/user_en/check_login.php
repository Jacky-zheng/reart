<?php
//这里简单的判断一下用户是否登陆
session_start();
if(empty($_SESSION["reart_id"]))
{
	//header("Location:login.php");
	echo "<script>window.location.href='/user/login.php?reurl='+document.location.href</script>";
	exit;
}
?>