<?php
require_once("../class/common.inc.php");
//����򵥵��ж�һ���û��Ƿ��½
if(!isset($_SESSION["xzx_uID"]))
	header("Location:login.php");
$tpl->display("admin/main.tpl.htm");
?>