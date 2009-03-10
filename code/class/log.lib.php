<?php
//登录日志：0为用户名不存在，1为登录正确，2为密码错误
class log {
	
	/**
	 * Enter description here...
	 *
	 * @param integer $iUID.		-用户的ID
	 * @param string $sFileName.	-文件名
	 * @param string $sAction.		-动作名
	 * @param string $sMsg.			-内容
	 * @param string $sContent.		-数据
	 * @param enum $iStatus.		-状态:0表示错误，1表示正确，2表示越权
	 */
	function insertLog($iUID, $sFileName, $sAction, $sMsg = "", $sContent = "", $iStatus = 1) {
		global $db;
		$aField				= array();
		$aField["uID"]		= $iUID;
		$aField["fileName"] = $sFileName;
		$aField["action"]	= $sAction;
		$aField["msg"]		= $sMsg;
		$aField["content"]	= $sContent;
		$aField["status"]	= $iStatus;
		$aField["addDate"]	= date("Y-m-d H:i:s");
		
		$db->insert("log_operate",$aField);
		return true;
	}
	
	/**
	 * 记录登录日志
	 *
	 * @param unknown_type $sName
	 * @param unknown_type $sPwd
	 * @param unknown_type $ip
	 * @param int $bFlag (1 表示登录成功, 2 表示密码错误 3 表示帐户不存在
	 * @param int $iAdminType (0 表示总后台，1 表示分站后台，2 表示个人会员，3 表示企业会员，4 表示专家)
	 */
	function insertLoginLog($sName, $sPwd, $ip, $bFlag,$iAdminType=0)
	{
		global $db;
		$aField					= array();
		$aField["userName"]		= $sName;
		$aField["pwd"] 			= $sPwd;
		$aField["ip"]			= $ip;
		$aField["status"]		= $bFlag;
		$aField["loginTime"]	= date("Y-m-d H:i:s");		
		$aField['adminType']    = $iAdminType;
		$db->insert("log_login",$aField);
		return true;
	}
	
	/**
	 * 所有登录日志
	 *
	 * @return array $aLoginAll		- 所有登录日志信息
	 */
	function loginAll($iStartNo,$iPerpage,$sWhere="1")
	{
		global $db;
		$aLoginAll = array();
		$sSQL = "SELECT * FROM log_login where $sWhere ORDER BY id DESC LIMIT $iStartNo,$iPerpage";
		$aLoginAll = $db->getRecordSet($sSQL);
		return $aLoginAll;
	}
	
	/**
	 * 所有操作日志
	 *
	 * @return unknown
	 */
	function operateAll($iStartNo,$iPerpage)
	{
		global $db;
		$aOperateAll = array();
		$sSQL = "SELECT * FROM log_operate ORDER BY id DESC LIMIT $iStartNo,$iPerpage";
		$aOperateAll = $db->getRecordSet($sSQL);
		return $aOperateAll;
	}
	
	/**
	 * 登录错误日志
	 *
	 * @return unknown
	 */
	function loginError($iStartNo,$iPerpage)
	{
		global $db;
		$aLoginError = array();
		$sSQL = "SELECT * FROM log_login WHERE status <> '1' ORDER BY id DESC LIMIT $iStartNo,$iPerpage";
		$aLoginError = $db->getRecordSet($sSQL);
		return $aLoginError;
	}
	
	/**
	 * 操作错误日志
	 *
	 * @return unknown
	 */
	function operateError($iStartNo,$iPerpage)
	{
		global $db;
		$aOperateError 	= array();
		$sSQL 			= "SELECT * FROM log_operate WHERE status = '0' ORDER BY id DESC LIMIT $iStartNo,$iPerpage";
		$aOperateError 	= $db->getRecordSet($sSQL);
		return $aOperateError;
	}
	
	/**
	 * 越权操作日志
	 *
	 */
	function operateOver($iStartNo,$iPerpage)
	{
		global $db;
		$aOperateOver 	= array();
		$sSQL 			= "SELECT * FROM log_operate WHERE status = '2' ORDER BY id DESC LIMIT $iStartNo,$iPerpage";
		$aOperateOver	= $db->getRecordSet($sSQL);
		return $aOperateOver;
	}
}
?>