<?php
require_once("class/common.inc.php");
require_once("class/user.lib.php");
loadLib("work");

$id = $_GET['id'];
( is_numeric( $id ) && $id > 0 ) || $id = 0;
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

/* ¼ÇÂ¼ä¯ÀÀÀúÊ· */
if (!empty($_COOKIE['reart']['history']))
{
    $history = explode(',', $_COOKIE['reart']['history']);

    array_unshift($history, $id);
    $history = array_unique($history);

    while (count($history) > 6)
    {
        array_pop($history);
    }

    setcookie('reart[history]', implode(',', $history), time() + 3600 * 24 * 30);
}
else
{
    setcookie('reart[history]', $id, time() + 3600 * 24 * 30);
}

$hisids = $_COOKIE['reart']['history'];

if(!empty($hisids))
{
	$history_list = $work->getWorkbyIDs($hisids);
	$tpl->assign('history_list', $history_list);
}

if ($res)
{
	$tpl->assign('workdetail', $res);
	$tpl->display("reart/detail.html");
}
else 
{
	$tpl->display("reart/detail_no.html");
}
?>