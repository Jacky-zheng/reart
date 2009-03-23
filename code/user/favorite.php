<?php
require_once("check_login.php");
require_once("../class/common.inc.php");
require_once("../class/user.lib.php");
loadLib("page_link");
loadLib("work");
$user_id = $_SESSION["reart_id"]/*'177'*/;

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);

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

$tpl->assign('worklist', $res['data']);
$tpl->assign('user_id', $user_id);
$tpl->assign('favo', 1);
$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);

$all = $res['count'];
$url = "favorite.php?";
$totalpage = ceil( $all / $page_link->length );

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);

$tpl->display("reart/favorite.html");
?>