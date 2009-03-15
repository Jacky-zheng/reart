<?php

class menu {
	
	/**
	 * Enter description here...
	 *
	 */
	function __construct() {
		//TO DO...
	}
	
	/**
	 * вС╠ъ╡к╣╔ап╠М
	 *
	 * @param int $pID
	 * @return array
	 */
	function getMenuList($pID) 
	{
		global $db;		 
		$sSQL = "SELECT * FROM `menu` WHERE pID = $pID or id =$pID ORDER BY orderID";
		$aMenuList = $db->getRecordSet($sSQL);
		return $aMenuList;
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