<?php
session_start();
//����򵥵��ж�һ���û��Ƿ��½
if(isset($_SESSION["xzx_uID"]))
	header("Location:login.php");
else 
	header("Location:main.php");
?>