<?php
/**
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class price
{
	function getPrice()
	{
		global $db;		
		$sSQL = "SELECT * from price";
		$res = $db->getRecordSet($sSQL);
		return $res;
	}
}
?>