<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("page_link");
loadLib("content");

$page_link = new page_link();
$page = $_GET['page'];
$language = $_GET['language'];
$id = $_GET['id'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = /*PAGESIZE*/1;
$page_link->length = $pagesize;

$params = array(
	'start' => ($page-1)*$pagesize,
	'pagesize' => $pagesize,
);

$res = content::getContentDetail($id);

if ($language=='en')
{	
	$art_title = $res['etitle'];
	$art_content =  $res['econtent'];
	$arr = explode('<center style="page-break-after: always;"></center>', $art_content);
	$all = count($arr);
	
	$page = ($page > $all)?1:$page; 
	$content = $arr[$page-1];
}
else 
{	
	$art_title = $res['title'];
	$art_content =  $res['content'];
	$arr = explode('<center style="page-break-after: always;"></center>', $art_content);
	$all = count($arr);
	
	$page = ($page > $all)?1:$page; 
	$content = $arr[$page-1];
}
$tpl->assign('art_title', $art_title);
$tpl->assign('content', $content);
$url = "invest_article.php?id=$id&".(($language=='en')?"language=en&":"");
$totalpage = ceil( $all / $page_link->length );
$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);

$file = "invest_article.html";
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
	$tpl->assign('title', '推荐收藏咨询');	
	$tpl->display("reart/".$file);
}
?>