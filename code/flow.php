<?php
require_once("class/common.inc.php");
loadLib("favorite");
loadLib("work");

$img_url_m = '/img/80/'; 
if ($_GET['action'] == 'favorite')
{
	$ft = new favorite();
	$id = $ft->addFavorite($_REQUEST['workid'], $_REQUEST['userid']);
	if (!$id)
		echo false;
	else
		echo $id;
}
elseif ($_GET['action'] == 'delete')
{
	$ft = new favorite();
	$res = $ft->delFavorite($_REQUEST['workid'], $_REQUEST['userid']);
	
	$work = new work();
	$arr = array(
		'userid'=>$_REQUEST['userid'],	
	);
	$wl = $work->getFavorite($arr);
	$str = '';
	foreach ($wl['data'] as $k=>$v)
	{
		$str .= '<li>
					<span><a href="detail.php?id='.$v['id'].'"><img src="'.$img_url_m.$v['picCode'].'.jpg" alt="" /></a></span>
					<p>作品名：'.$v['name'].'</p>
					<p>作者：'.$v['artist_name'].'</p>
					<p>日期：'.$v['addDate'].'</p>
					<p>价格：'.$v['price'].'</p>
					<p><button onclick="delete_favorite('.$v['id'].','.$_REQUEST['userid'].')">删除</botton></p>
				</li>';
	}
	echo $str;
}
else
{
	echo false;
}
?>