<?php
//����򵥵��ж�һ���û��Ƿ��½
session_start();
if(empty($_SESSION["xzx_uID"]))
{
	header("Location:login.php");
}
?>