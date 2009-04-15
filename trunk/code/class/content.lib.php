<?php
/**
 * ????????
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://reart.com.cn/';</script>";
}

class content
{
	function getContentList($params)
	{
		global $db;
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:10;
		$cateID = !empty($params['cateid'])?$params['cateid']:2;
		
		$sSQL = "select id, title, etitle from content where cateID='$cateID' limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from content where cateID='$cateID'";
		
		$res['data'] = $db->getRecordSet($sSQL);
		$rCnt = $db->getRecordSet($cSQL);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}
	
	function getContentDetail($id)
	{
		global $db;
		$sSQL = "select * from content where id='$id'";
		$aRs = $db->getRecordSet($sSQL,1);
		return $aRs;
	}
}
?>