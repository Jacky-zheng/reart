<?php
/**
 * ????????
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://reart.com.cn/';</script>";
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
		$sSQL = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate, a.name as artist_name, a.ename as artist_ename FROM work as w left join artist as a on a.artistCode=w.artistCode left join price as p on w.price=p.id where w.status!='3' order by w.rank asc limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from work where status!='3'";
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
			$sql_tail .= " and p.id=".$params['price'];
		}
		if (!empty($params['artist']))
		{
			$sql_tail .= " and a.name like '%".$params['artist']."%'";
		}
		if (!empty($params['eartist']))
		{
			$sql_tail .= " and UPPER(replace(a.ename, ' ', '')) like '%".strtoupper(preg_replace('/(\s+)/', '', $params['eartist']))."%'";
		}
		if (!empty($params['age']))
		{
			$sql_tail .= " and w.age=".$params['age'];
		}
		if (!empty($params['cate']))
		{
			$sql_tail .= " and w.cID=".$params['cate'];
		}
		
		$sql = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate, a.name as artist_name, a.ename as artist_ename FROM work as w left join artist as a on a.artistCode=w.artistCode left join price as p on w.price=p.id where w.status!='3' ";
		$sql_count = "SELECT count(*) as num FROM work as w left join artist as a on a.artistCode=w.artistCode left join price as p on w.price=p.id where w.status!='3' ";
		
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		
		$sql = $sql.$sql_tail." order by w.rank asc limit ".$start.",".$pagesize;
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
		$sql = "select w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate, w.comment, w.ecomment, w.description, w.edescription, w.size, w.esize, w.signal, w.esignal,w.etexture,w.texture, w.literature, w.eliterature, w.exhibition, w.exhibitionEName, c.name as cate_name, c.ename as cate_ename, a.name as artist_name, a.ename as artist_ename, a.description as resume, a.edescription as eresume from work as w left join artist as a on a.artistCode=w.artistCode left join category as c on c.id=w.cID left join price as p on w.price=p.id where w.id=".$id;
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
		$sql = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate, a.name as artist_name, a.ename as artist_ename FROM work as w left join artist as a on a.artistCode=w.artistCode left join price as p on w.price=p.id where w.id in ($ids) and w.status!='3'";
		
		$res = $db->getRecordSet($sql);
		return $res;
		
	}
	/*获得五条推荐作品，status=2*/
	function getReWork()
	{
		global $db;
		
		$sSQL = "SELECT w.id, w.name, w.ename, w.cID, w.price, w.age, w.artistCode, w.picCode, w.addDate, a.name as artist_name, a.ename as artist_ename FROM work as w left join artist as a on a.artistCode=w.artistCode where w.status='2' order by w.addDate desc limit 0, 5";
		//echo $sSQL;
		$res = $db->getRecordSet($sSQL);
		return $res;
	}
	function getFavorite($params=array())
	{
		global $db;
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		$sSQL = "SELECT f.workID, f.addDate as faddDate, w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate, a.name as artist_name, a.ename as artist_ename FROM workfavorite as f left join work as w on f.workID=w.id left join artist as a on a.artistCode=w.artistCode left join price as p on w.price=p.id where f.userID='".$params['userid']."' and w.status!='3' order by f.addDate desc limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from workfavorite as f left join work as w on f.workID=w.id where f.userID='".$params['userid']."' and w.status!='3' ";
		//echo $sSQL;
		$res['data'] = $db->getRecordSet($sSQL);
		$rCnt = $db->getRecordSet($cSQL);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}

	function getCatelog()
	{
		global $db;
		
		$sSQL = "SELECT * from category";
		$res = $db->getRecordSet($sSQL);
		return $res;
	}
	
	function getPrice()
	{
		global $db;
		
		$sSQL = "SELECT * from price";
		$res = $db->getRecordSet($sSQL);
		return $res;
	}
	
	function updateRank($id, $rank)
	{
		global $db;
		
		$sSQL = "update work set rank=$rank where id=$id limit 1";
		$res = $db->query($sSQL);
		return $res;
	}
}
?>