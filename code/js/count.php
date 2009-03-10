<?
	require_once("../config.php");		
	if(!isset($_GET['act']) || !isset($_GET['id'])) exit;
	$sTbl = $_GET['act'];
	$iID = $_GET['id'];
	
	$p = strpos("xzx_".$sTbl,"rich");
	if($p > 0) DBconnect(1);
	
	$sSQL = "update $sTbl set click=click+1 where id=$iID";
	//echo $sSQL;
	mysql_query($sSQL);
?>
