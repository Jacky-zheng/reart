<?php
//����򵥵��ж�һ���û��Ƿ��½
session_start();
if(empty($_SESSION["reart_id"]))
{
	header("Location:login.php");
}
?>