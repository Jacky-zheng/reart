<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("page_link");
loadLib("work");

$page_link = new page_link();
$page = $_GET['page'];
$flag = $_GET['flag'];
$language = $_GET['language'];
( is_numeric( $page ) && $page > 0 ) || $page = 1;
$page = intval( $page );
$pagesize = PAGESIZE;
$page_link->length = $pagesize;
$work = new work();
/*取浏览历史列表*/
if ($flag == 'history')
{
	if (!empty($_COOKIE['reart']['history']))
	{
		$history = explode(',', $_COOKIE['reart']['history']);
		$all = count($history);
		$show = array_slice($history, ($page-1)*$pagesize, $pagesize);
		$history_list = $work->getWorkbyIDs(implode(',', $show));
		$tpl->assign('worklist', $history_list);
		$url = "list.php?flag=history&".(($language=='en')?"language=en&":"");
	}
}
else 
{
	$params = array(
		'start' => ($page-1)*$pagesize,
		'pagesize' => $pagesize,
	);
	
	$res = $work->getWorkList($params);
	$tpl->assign('worklist', $res['data']);
	$all = $res['count'];
	$url = "list.php?".(($language=='en')?"language=en&":"");
}
$totalpage = ceil( $all / $page_link->length );

$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("user_id",empty($_SESSION["reart_id"])?'0':$_SESSION["reart_id"]);

$page_res = $page_link->make_page( $all, $page, $url, 'page_no' );
$tpl->assign("nowpage_num",$all);
$tpl->assign("page_res",$page_res);

$tpl->assign("check_login",$check_login);
$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);

$file = ($flag == 'history')?"history.html":"list.html";
if ($language=='en')
{
	$tpl->assign('title', 'work list');	
	$tpl->display("reart_en/".$file);
}
else 
{
	$tpl->assign('title', '作品列表');	
	$tpl->display("reart_en/".$file);
}
?>