<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
//����򵥵��ж�һ���û��Ƿ��½
if($_SESSION["xzx_uID"] == "")
	header("Location:login.php");
//������Ϣ
$aInfo = manager::getManagerInfo($_SESSION["xzx_uID"]);
$tpl->assign("aInfo", $aInfo);

$tpl->display("admin/home.tpl.htm");
?>