<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}

class manager {	
	
	/**
	 * ȡ�ù���Ա��ȫ����Ϣ
	 *
	 * @param unknown_type $iID
	 * @return unknown
	 */
	function getManagerInfo($iID) {
		global $db;
		$sSQL = "SELECT * FROM manager WHERE id=".$iID;
		$aInfo = $db->getRecordSet($sSQL, 1);
		return $aInfo;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iID
	 * @return unknown
	 */
	function getManagerNameByID($iID)
	{
		return "name";
	}
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $db
	 */
	function listAllManager($sWhere) {
		global $db;
		$sSQL = "SELECT * FROM manager WHERE $sWhere";
		$aList = $db->getRecordSet($sSQL, 15);
		return $aList;
	}
	
	/**
	 * �û����Ƿ��Ѿ�����
	 *
	 * @param string $sUserName
	 */
	function isUserExists($sUserName)
	{
		global $db;
		$sSQL = "SELECT id FROM `manager` WHERE userName='$sUserName'";
		if(count($db->getRecordSet($sSQL, 1)) > 0)
			return true;
		else
			return false;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iUID
	 * @param unknown_type $sFileName
	 * @param unknown_type $sAction
	 */
	
	function checkPower($iUID, $sFileName, $sAction) {
		global $db;
		if($iUID == 1 || $iUID == 9)
			return true;
		//�����save����ɸѡȥ�� 
		if(preg_match("/save/i", $sAction))
			return true;
		$sSQL = "SELECT id FROM `power` WHERE fileNameEn='$sFileName' AND powerNameEn='$sAction'";
		$aInfo = $db->getRecordSet($sSQL, 1);
		$iNowPowerID = $aInfo['id'];
		if(@in_array($iNowPowerID, $_SESSION['xzx_powerID']))
			return true;
		else 
			return false;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sType
	 */
	function getManagerListByType($sType) {
		$sLowerStr = strtolower($sType);		//Сд
		$sUpperStr = strtoupper($sType);		//��д
		if(file_exists("../".CACHE_FILE."/_cache_manager_".$sLowerStr.".php"))
		{
			require_once("../".CACHE_FILE."/_cache_manager_".$sLowerStr.".php");
			$sVarPrefix = "_CACHE_MANAGER_";
			$aReturnArray = ${$sVarPrefix.$sUpperStr};
		} else {
			//�����ڻ����ļ�����ʼ��ѯ���ݿ�
			$aReturnArray = $this->_getManagerIDAndNameByType($sLowerStr);
		}
		return $aReturnArray;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sType
	 */
	function _getManagerIDAndNameByType($sType) 
	{
		global $db;
		switch ($sType)
		{
			case "manager":
				$iRoleID = "(1)";
				break;
			case "yewu":
				$iRoleID = "(6,7)";
				break;
			case "kefu":
				$iRoleID = "(3,4)";
				break;
			default:
				$iRoleID = "()";
				break;
		}
		
		$sSQL = "SELECT id,trueName FROM `manager` WHERE roleID IN {$iRoleID} AND status <> '0'";
		$aList = $db->getRecordSet($sSQL);
		$aList_ = array2Array($aList, "id", "trueName");
		return $aList_;
	}
}
?>