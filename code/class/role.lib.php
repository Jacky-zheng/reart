<?php

class role {
	
	/**
	 * Enter description here...
	 *
	 */
	function __construct() {
		//TO DO...
	}
	/**
	 * 得到角色列表
	 *
	 * @param object $db
	 * @param enum $status
	 * @return unknown
	 */
	function getRoleList($status = NULL) {
		global $db;
		if(is_null($status))
			$sWhere = " 1";
		else
			$sWhere = " status = '{$status}'";
		$sSQL = "SELECT id,name,powerID FROM `role` WHERE {$sWhere}";
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iRoleID
	 */
	function getRoleInfoByID($iRoleID)
	{
		global $db;
		$sSQL = "SELECT * FROM `role` WHERE id=".$iRoleID;
		$aInfo = $db->getRecordSet($sSQL, 1);
		return $aInfo;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iRoleID
	 * @return unknown
	 */
	function getRoleNameByID($iRoleID)
	{
		global $db;
		$sSQL = "SELECT name FROM `role` WHERE id=".$iRoleID;
		$aInfo = $db->getRecordSet($sSQL, 1);
		return $aInfo["name"];
	}
	
}
?>