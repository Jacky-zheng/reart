<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
//����򵥵��ж�һ���û��Ƿ��½
if($_SESSION["xzx_uID"] == "")
	header("Location:login.php");

$tpl->display("admin/top.tpl.htm");
?>