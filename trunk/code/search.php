<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("page_link");
loadLib("work");

$page_link = new page_link();
$page = $_GET['page'];
$language = $_GET['language'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = PAGESIZE;
$page_link->length = $pagesize;

if (array_key_exists('vl', $_GET))
{
	$vl = isset($_GET['vl']) ? trim($_GET['vl']) : "";
	$params = array(
		'start' => ($page-1)*$pagesize,
		'pagesize' => $pagesize,
		'vl'=>$vl,
	);
}
else 
{
	$price = isset($_POST['price']) ? trim($_POST['price']) : trim($_GET['price']);
	$artist = isset($_POST['artist']) ? trim($_POST['artist']) : trim($_GET['artist']);
	$eartist = isset($_POST['eartist']) ? trim($_POST['eartist']) : trim($_GET['eartist']);
	$age = isset($_POST['age']) ? trim($_POST['age']) : trim($_GET['age']);
	$cate = isset($_POST['cate']) ? trim($_POST['cate']) : trim($_GET['cate']);	
	$params = array(
		'start' => ($page-1)*$pagesize,
		'pagesize' => $pagesize,
		'price'=>$price,
		'artist'=>$artist,
		'eartist'=>$eartist,
		'cate'=>$cate,
		'age'=>$age,
	);
}
$res = work::searchWorkList($params);
$tpl->assign('sarch_arr', $params);
if ($language=='en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
}
$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$tpl->assign('worklist', $res['data']);
$tpl->assign("cate",work::getCatelog());
$tpl->assign("price",work::getPrice());

$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);

$all = $res['count'];
//$url = "search.php?";
$url = "search.php?".(($language=='en')?"language=en&":"");
$totalpage = ceil( $all / $page_link->length );

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);
if ($language=='en')
{
	$tpl->assign('title', 'Search Result');
	$tpl->display("reart_en/search.html");
}
else 
{
	$tpl->assign('title', '搜索结果');
	$tpl->display("reart/search.html");
}
?>