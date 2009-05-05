<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("page_link");
loadLib("content");

$page_link = new page_link();
$page = $_GET['page'];
$language = $_GET['language'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = /*PAGESIZE*/10;
$page_link->length = $pagesize;


$params = array(
	'start' => ($page-1)*$pagesize,
	'pagesize' => $pagesize,
);

$res = content::getContentList($params);
$tpl->assign('investlist', $res['data']);
$all = $res['count'];
$url = "invest.php?".(($language=='en')?"language=en&":"");

$totalpage = ceil( $all / $page_link->length );

$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);

$file = "invest.html";
if ($language=='en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', 'invest list');	
	$tpl->display("reart_en/".$file);
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', '推荐收藏列表');	
	$tpl->display("reart/".$file);
}
?>