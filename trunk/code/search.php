<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("page_link");
loadLib("work");

$page_link = new page_link();
$page = $_GET['page'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = PAGESIZE;
$page_link->length = $pagesize;

$price = isset($_POST['price']) ? trim($_POST['price']) : "";
$artist = isset($_POST['artist']) ? trim($_POST['artist']) : "";
$age = isset($_POST['age']) ? trim($_POST['age']) : "";
$cate = isset($_POST['cate']) ? trim($_POST['cate']) : "";

$params = array(
	'start' => ($page-1)*$pagesize,
	'pagesize' => $pagesize,
	'price'=>$price,
	'artist'=>$artist,
	'cate'=>$cate,
	'age'=>$age,
);
$tpl->assign('sarch_arr', $params);
$work = new work();
$res = $work->searchWorkList($params);

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$tpl->assign('worklist', $res['data']);
$tpl->assign("cate",$work->getCatelog());

$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);

$all = $res['count'];
$url = "search.php?";
$totalpage = ceil( $all / $page_link->length );

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);

$tpl->display("reart/search.html");
?>