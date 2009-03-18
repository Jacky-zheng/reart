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
	 * �õ���Ʒ�б�
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
		$sql = "select w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, w.comment, w.description, a.name as artist_name, a.description as resume from work as w, artist as a where a.id=w.artistID and w.id=".$id;
		$res = $db->getRecordSet($sql);
		$sql_more = "select id from work where id>$id order by id asc limit 0,1";
		$res_more = $db->getRecordSet($sql_more);
		$sql_less = "select id from work where id<$id order by id desc limit 0,1";
		$res_less = $db->getRecordSet($sql_less);
		if ($res)
		{
			$res[0][less_id] = $res_less[0]['id'];
			$res[0][more_id] = $res_more[0]['id'];
			return $res[0];
		}
		else 
		{
			return false;
		}
	}
	
	function getWorkbyIDs($ids)
	{
		global $db;
		$sql = "SELECT w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name FROM work as w left join artist as a on a.id=w.artistID where w.id in ($ids) order by w.addDate desc";
		$res = $db->getRecordSet($sql);
		return $res;
		
	}
	/*��������Ƽ���Ʒ��status=3*/
	function getReWork()
	{
		global $db;
		
		$sSQL = "SELECT w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name FROM work as w left join artist as a on a.id=w.artistID where w.status='1' order by w.addDate desc limit 0, 5";
		//echo $sSQL;
		$res = $db->getRecordSet($sSQL);
		return $res;
	}
	function getFavorite($params=array())
	{
		global $db;
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		$sSQL = "SELECT f.workID, f.addDate as faddDate, w.id, w.name, w.cID, w.price, w.age, w.artistID, w.picPath, w.addDate, a.name as artist_name FROM workfavorite as f left join work as w on f.workID=w.id left join artist as a on a.id=w.artistID where f.userID='".$params['userid']."' order by f.addDate desc limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from workfavorite where userID='".$params['userid']."'";
		//echo $sSQL;
		$res['data'] = $db->getRecordSet($sSQL);
		$rCnt = $db->getRecordSet($cSQL);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}
}
?>