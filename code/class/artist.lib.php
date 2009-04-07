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
		echo $sOption;
		return $sOption;  	
	}
}
?>