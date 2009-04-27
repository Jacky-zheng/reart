<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("artist");
loadLib("work");

$language = $_GET['language'];

$file = "artist.html";
$arclist = artist::getArtistByAlpha();
if ($language=='en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', 'artist list');	
	$tpl->display("reart_en/".$file);
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', '作家列表');	
	$tpl->display("reart/".$file);
}
?>