<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("work");
loadLib("artist");

$language = $_GET['language'];

$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$tpl->assign("cates",work::getCatelog());
$tpl->assign("prices",work::getPrice());
$tpl->assign("arclist",artist::getArtistByAlpha());

$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);

$file = "buylist.html";
if ($language=='en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', 'buy list');	
	$tpl->display("reart_en/".$file);
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', '购买列表');	
	$tpl->display("reart/".$file);
}
?>