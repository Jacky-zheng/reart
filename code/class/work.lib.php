<?php
/**
 * ????????
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class work
{
	/**
	 * 得到作品列表
	 *
	 * @param array $params
	 * start:
	 * pagesize:
	 * @return array
	 */
	function getWorkList($params)
	{
		global $db;
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		$sSQL = "SELECT w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name FROM work as w left join artist as a on a.id=w.artistID  limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from work";
		//echo $sSQL;
		$res['data'] = $db->getRecordSet($sSQL);
		$rCnt = $db->getRecordSet($cSQL);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}
	
	function searchWorkList($params=array())
	{
		global $db;
		if (!empty($params['price']))
		{
			$sql_tail = " and w.price=".$params['price'];
		}
		if (!empty($params['artist']))
		{
			$sql_tail = " and a.name like '".$params['artist']."'";
		}
		if (!empty($params['age']))
		{
			$sql_tail = " and w.age=".$params['age'];
		}
		
		$sql = "SELECT w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name FROM work as w, artist as a where a.id=w.artistID ";
		$sql_count = "SELECT count(*) as num FROM work w, artist a where a.id=w.artistID ";
		
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		
		$sql = $sql.$sql_tail." limit ".$start.",".$pagesize;
		$sql_count .= $sql_tail;
		
		$res['data'] = $db->getRecordSet($sql);
		$rCnt = $db->getRecordSet($sql_count);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}
	
	function getWorkDetail($id)
	{
		global $db;
		if (empty($id))
		{
			return false;
		}
		$sql = "select w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name, a.description from work as w, artist as a where a.id=w.artistID and w.id=".$id;
		$res = $db->getRecordSet($sql);
		if ($res)
		{
			return $res[0];
		}
		else 
		{
			return false;
		}
	}
}
?>