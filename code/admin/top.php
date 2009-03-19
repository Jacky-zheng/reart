<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
//这里简单的判断一下用户是否登陆
if($_SESSION["xzx_uID"] == "")
	header("Location:login.php");

$tpl->display("admin/top.tpl.htm");
?>