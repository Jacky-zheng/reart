<?php
require_once("class/common.inc.php");
loadLib("work");

$id = $_GET['id'];
( is_numeric( $id ) && $id > 0 ) || $id = 0;
$id = intval( $id );

$work = new work();
$res = $work->getWorkDetail($id);

$tpl->assign('img_url_xl', IMG_URL_XL);
$tpl->assign('img_url_l', IMG_URL_L);
$tpl->assign('img_url_m', IMG_URL_M);
$tpl->assign('img_url_s', IMG_URL_S);
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