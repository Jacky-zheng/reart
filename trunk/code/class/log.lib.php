<?php
//��¼��־��0Ϊ�û��������ڣ�1Ϊ��¼��ȷ��2Ϊ�������
class log {
	
	/**
	 * Enter description here...
	 *
	 * @param integer $iUID.		-�û���ID
	 * @param string $sFileName.	-�ļ���
	 * @param string $sAction.		-������
	 * @param string $sMsg.			-����
	 * @param string $sContent.		-����
	 * @param enum $iStatus.		-״̬:0��ʾ����1��ʾ��ȷ��2��ʾԽȨ
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
	 * ��¼��¼��־
	 *
	 * @param unknown_type $sName
	 * @param unknown_type $sPwd
	 * @param unknown_type $ip
	 * @param int $bFlag (1 ��ʾ��¼�ɹ�, 2 ��ʾ������� 3 ��ʾ�ʻ�������
	 * @param int $iAdminType (0 ��ʾ�ܺ�̨��1 ��ʾ��վ��̨��2 ��ʾ���˻�Ա��3 ��ʾ��ҵ��Ա��4 ��ʾר��)
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
	 * ���е�¼��־
	 *
	 * @return array $aLoginAll		- ���е�¼��־��Ϣ
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
	 * ���в�����־
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
	 * ��¼������־
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
	 * ����������־
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
	 * ԽȨ������־
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