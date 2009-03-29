<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("work");

$id = $_GET['id'];
$language = $_GET['language'];
( is_numeric( $id ) && $id > 0 ) || $id = 1;
$id = intval( $id );

$work = new work();
$res = $work->getWorkDetail($id);
$recommen_list = $work->getReWork();

$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);
$check_login = checkUserState($_SESSION["reart_id"]);
$tpl->assign("check_login",$check_login);
$tpl->assign('recommen_list', $recommen_list);

/* 记录浏览历史 */
if (!empty($_COOKIE['reart']['history']))
{
    $history = explode(',', $_COOKIE['reart']['history']);

    array_unshift($history, $id);
    $history = array_unique($history);
    //取前6个最新浏览
    $show = array_slice($history, 0, 6);
/*
    while (count($history) > 6)
    {
        array_pop($history);
    }
*/
    setcookie('reart[history]', implode(',', $history), time() + 3600 * 24 * 30);
}
else
{
    setcookie('reart[history]', $id, time() + 3600 * 24 * 30);
}

$hisids = implode(',', $show);

if(!empty($hisids))
{
	$history_list = $work->getWorkbyIDs($hisids);
}
else 
{
	$history_list['picCode'] = 'picno';
	//$history_list['name'] = 'reart';
	$tpl->assign('listlink', 1);
}
$tpl->assign('history_list', $history_list);

$tpl->assign('workdetail', $res);
$file = (empty($res))?"detail_no.html":"detail.html";
if ($language=='en')
{
	$check_login = checkUserState($_SESSION["reart_id"],"en");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', 'work detail');	
	$tpl->display("reart_en/".$file);
}
else 
{
	$check_login = checkUserState($_SESSION["reart_id"],"ch");
	$tpl->assign("check_login",$check_login);
	$tpl->assign('title', '查看作品');	
	$tpl->display("reart/".$file);
}

?>