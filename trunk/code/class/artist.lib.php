<?php
/**
 * ????????
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://reart.com.cn/';</script>";
}

class artist
{
	function getArtistList($aidMe=0)
	{
		global $db;
		$sSQL = "select * from artist order by artistCode desc";
		$aRs = $db->getRecordSet($sSQL);			
		$iCounts = count($aRs);
		for($i=0; $i<$iCounts; $i++)
		{
			if($aidMe == $aRs[$i]['artistCode']) 
	      		$sOption .= "<option value=".$aRs[$i]['artistCode']." selected>".$str.$aRs[$i]['name']."(".$str.$aRs[$i]['artistCode'].")</option>";
	    	else 
	      		$sOption .= "<option value=".$aRs[$i]['artistCode'].">".$str.$aRs[$i]['name']."(".$str.$aRs[$i]['artistCode'].")</option>";
		}
		$sOption .= "<option value='0'>其他</option>";	
		return $sOption;  	
	}
	
	function getArtistDetail($id)
	{
		global $db;
		$sSQL = "select * from artist where artistCode='$id'";
		$aRs = $db->getRecordSet($sSQL,1);
		return $aRs;
	}
	
	function getMaxCode()
	{
		global $db;
		$sSQL = "SELECT max(artistCode) as mc FROM artist";
		$aRs = $db->getRecordSet($sSQL, 1);
		return $aRs['mc'];
	}
	
	function getArtistByName($name)
	{
		global $db;
		$sSQL = "select * from artist where name='".trim($name)."'";
		$aRs = $db->getRecordSet($sSQL,1);
		return $aRs;
	}
	
	function getArtistById($id)
	{
		global $db;
		$sSQL = "select * from artist where id='".trim($id)."'";
		$aRs = $db->getRecordSet($sSQL,1);
		return $aRs;
	}
	
	function getAllArtist()
	{
		global $db;
		$sSQL = "select * from artist order by artistCode desc";
		$aRs = $db->getRecordSet($sSQL);	
		return $aRs;
	}
	
	function getArtistByAlpha()
	{
		global $db;
		$arr = array();
		for ($i=65; $i<=90; $i++)
		{
			$key = chr($i);
			$sql = "select name, ename from artist where UPPER(ename) like '".$key."%'";
			$res = $db->getRecordSet($sql);
			$arr[$key] = $res;
		}
		return $arr;		
	}
}
?>