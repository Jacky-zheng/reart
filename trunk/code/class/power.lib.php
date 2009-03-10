<?php

class power {
	
	/**
	 * Enter description here...
	 *
	 */
	function __construct() 
	{
		//TO DO...
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iStatus
	 * @return unknown
	 */
	
	function getPowerList($iStatus = NULL) {
		global $db;
		if(is_null($iStatus))
			$sSQL = "SELECT * FROM `power` WHERE 1 order by fileNameEn DESC,id desc";
		else 
			$sSQL = "SELECT * FROM `power` WHERE status='{$iStatus}' ORDER BY fileNameEn DESC,id DESC";
		$aPowerList = $db->getRecordSet($sSQL);
		return $aPowerList;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iPowerID
	 */
	function getPowerNameByID($iPowerID)
	{
		global $db;
		$sSQL = "SELECT id,fileNameCn,powerNameCn FROM `power` WHERE id=".$iPowerID;
		$aInfo = $db->getRecordSet($sSQL, 1);
		return $aInfo;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iPowerID
	 * @return unknown
	 */
	function getPowerInfoByID($iPowerID)
	{
		global $db;
		$sSQL = "SELECT * FROM `power` WHERE id=".$iPowerID;
		$aInfo = $db->getRecordSet($sSQL, 1);
		return $aInfo;
	}
}
?>