<?php
require_once("class/common.inc.php");
loadLib("favorite");

if ($_GET['action'] == 'favorite')
{
	$ft = new favorite();
	$id = $ft->addFavorite($_POST['workid'], $_POST['userid']);
	if (!$id)
		echo false;
	else
		echo $id;
}
elseif ($_GET['action'] == 'delete')
{

}
else
{
	echo false;
}
?>