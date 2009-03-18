<?php
//require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");
loadLib("page_link");
loadLib("work");
$user_id = /*$_SESSION["reart_id"]*/'177';

$page_link = new page_link();
$page = $_GET['page'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = PAGESIZE;
$page_link->length = $pagesize;

$params = array(
	'start' => ($page-1)*$pagesize,
	'pagesize' => $pagesize,
	'userid'=>$user_id,
);
$work = new work();
$res = $work->getFavorite($params);

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

$tpl->assign('worklist', $res['data']);
$tpl->assign('userid', $user_id);
$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);
$tpl->display("reart/favorite.html");
?>