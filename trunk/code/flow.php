<?php
require_once("class/common.inc.php");
loadLib("favorite");
loadLib("work");
loadLib("artist");

$img_url_m = '/img/200/'; 
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
elseif ('update_rank' == $_GET['action'])
{
	$arr = $_POST;
	if (!empty($arr))
	{
		$work = new work();
		foreach ($arr as $key=>$value)
		{
			$work->updateRank($key, $value);
		}
		echo true;
	}
	else 
	{
		echo false;
	}
}
elseif ('getartistname' == $_GET['action'])
{
	$at = artist::getArtistDetail($_POST['id']);
	if (empty($at))
	{
		echo false;
	}
	else 
	{
		echo $at['artistCode'].','.$at['name'];
	}
}
elseif ('addnewartist' == $_GET['action'])
{
	$aField['name'] = $_POST['name'];
	$aField['artistCode'] = artist::getMaxCode()+1;
	$aField['status'] = '0';
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($db->insert('artist',$aField))
	{
		$at = artist::getArtistDetail($aField['artistCode']);
		if (empty($at))
		{
			echo false;
		}
		else 
		{
			echo $at['artistCode'].','.$at['name'];
		}
	}
	else 
	{
		echo false;
	}
}
elseif ('checknameexist' == $_GET['action'])
{
	$ai = artist::getArtistByName($_POST['name']);
	if (!empty( $ai['id']))
	{
		echo $ai['id'].','.$ai['artistCode'];
	}
	else 
	{
		echo false;
	}
}
else
{
	echo false;
}
?>