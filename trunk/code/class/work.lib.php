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
		$sSQL = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate FROM work as w left join price as p on w.price=p.id where w.status!='3' order by w.rank asc limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from work where status!='3'";
		//echo $sSQL;
		$wl = $db->getRecordSet($sSQL);
		if (!empty($wl))
		{
			foreach ($wl as $k=>&$v)
			{ 
				$sql = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$v['artistCode'].")";
				$rs =  $db->getRecordSet($sql, 1);
				$v['artist_name'] = $rs['artist_name'];
				$v['artist_ename'] = $rs['artist_ename'];
			}
		}
		$res['data'] = $wl;
		$rCnt = $db->getRecordSet($cSQL);
		$res['start'] = $start;
		$res['pagesize'] = $pagesize;
		$res['count'] = $rCnt[0]['num'];
		return $res;
	}
	
	function searchWorkList($params=array())
	{
		global $db;
		if (!empty($params['vl']))//头部搜索
		{
			//判断搜索是否是作者
			$sl = "select a.id from artist a where "."a.name like '%".$params['vl']."%'"." or UPPER(replace(a.ename, ' ', '')) like '%".strtoupper(preg_replace('/(\s+)/', '', $params['vl']))."%'";
			$rt = $db->getRecordSet($sl, 1);
			if (!empty($rt))
			{
				$sql_tail .= " and w.artistCode like '%".$rt['id']."%'";
			}
			else 
			{
				$sql_tail .= " and (p.price_name like '%".$params['vl'] ."%' or p.price_ename like '%".$params['vl']. "%' ";
				//$sql_tail .= " or a.name like '%".$params['vl']."%'";
				//$sql_tail .= " or UPPER(replace(a.ename, ' ', '')) like '%".strtoupper(preg_replace('/(\s+)/', '', $params['vl']))."%'";
				$sql_tail .= " or w.age='".$params['vl']."'";
				$sql_tail .= " or c.name  like '%".$params['vl'] ."%' or c.name  like '%".$params['vl'] ."%')";
			}
		}
		else //搜索框搜索
		{
			if (!empty($params['artist']) || !empty($params['eartist']))
			{
				$sl = "select a.id from artist a where "."a.name like '%".$params['artist']."%'"." or UPPER(replace(a.ename, ' ', '')) like '%".strtoupper(preg_replace('/(\s+)/', '', $params['eartist']))."%'";
				$rt = $db->getRecordSet($sl, 1);
				if (empty($rt))
				{
					return false;
				}
				else 
				{
					$sql_tail .= " and w.artistCode like '%".$rt['id']."%'";
				}
			}
			else 
			{
				if (!empty($params['price']))
				{
					$sql_tail .= " and p.id=".$params['price'];
				}
				if (!empty($params['age']))
				{
					$sql_tail .= " and w.age=".$params['age'];
				}
				if (!empty($params['cate']))
				{
					$sql_tail .= " and w.cID=".$params['cate'];
				}
			}				
		}
		$sql = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate FROM work as w left join price as p on w.price=p.id left join category c on w.cID=c.id where w.status!='3' ";
		$sql_count = "SELECT count(*) as num FROM work as w left join price as p on w.price=p.id left join category c on w.cID=c.id where w.status!='3' ";
		
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		
		$sql = $sql.$sql_tail." order by w.rank asc limit ".$start.",".$pagesize;
		$sql_count .= $sql_tail;
		
		$wl = $db->getRecordSet($sql);
		if (!empty($wl))
		{
			foreach ($wl as $k=>&$v)
			{ 
				$sql2 = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$v['artistCode'].")";
				$rs2 =  $db->getRecordSet($sql2, 1);
				$v['artist_name'] = $rs2['artist_name'];
				$v['artist_ename'] = $rs2['artist_ename'];
			}
		}
		$res['data'] = $wl;
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
			$sl = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$res['artistCode'].")";
			$rs =  $db->getRecordSet($sl, 1);
			$res['artist_name'] = $rs['artist_name'];
			$res['artist_ename'] = $rs['artist_ename'];
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
		$sql = "SELECT w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate FROM work as w left join price as p on w.price=p.id where w.id in ($ids) and w.status!='3'";
		
		$res = $db->getRecordSet($sql);
		
		if (!empty($res))
		{
			foreach ($res as $k=>$v)
			{
				$sl = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$v['artistCode'].")";
				$rs =  $db->getRecordSet($sl, 1);
				$v['artist_name'] = $rs['artist_name'];
				$v['artist_ename'] = $rs['artist_ename'];
			}
		}
		return $res;
		
	}
	/*获得五条推荐作品，status=2*/
	function getReWork()
	{
		global $db;
		
		$sSQL = "SELECT w.id, w.name, w.ename, w.cID, w.price, w.age, w.artistCode, w.picCode, w.addDate FROM work as w where w.status='2' order by w.addDate desc limit 0, 5";
		//echo $sSQL;
		$res = $db->getRecordSet($sSQL);
		if (!empty($res))
		{
			foreach ($res as $k=>$v)
			{
				$sl = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$v['artistCode'].")";
				$rs =  $db->getRecordSet($sl, 1);
				$v['artist_name'] = $rs['artist_name'];
				$v['artist_ename'] = $rs['artist_ename'];
			}
		}
		return $res;
	}
	function getFavorite($params=array())
	{
		global $db;
		$start = !empty($params['start'])?$params['start']:0;
		$pagesize = !empty($params['pagesize'])?$params['pagesize']:8;
		$sSQL = "SELECT f.workID, f.addDate as faddDate, w.id, w.name, w.ename, w.cID, w.age, p.price_name as price, p.price_ename as eprice, w.artistCode, w.picCode, w.addDate FROM workfavorite as f left join work as w on f.workID=w.id left join price as p on w.price=p.id where f.userID='".$params['userid']."' and w.status!='3' order by f.addDate desc limit ".$start.",".$pagesize;
		$cSQL = "select count(*) as num from workfavorite as f left join work as w on f.workID=w.id where f.userID='".$params['userid']."' and w.status!='3' ";
		//echo $sSQL;
		$wl = $db->getRecordSet($sSQL);
		if (!empty($wl))
		{
			foreach ($wl as $k=>&$v)
			{ 
				$sql = "select GROUP_CONCAT(a.name) as artist_name, GROUP_CONCAT(a.ename) as artist_ename from artist a where a.artistCode in (".$v['artistCode'].")";
				$rs =  $db->getRecordSet($sql, 1);
				$v['artist_name'] = $rs['artist_name'];
				$v['artist_ename'] = $rs['artist_ename'];
			}
		}
		$res['data'] = $wl;
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