<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}

class project
 {	
	/**
	 * ��ȡ��Ŀ����
	 *
	 * @param int $id
	 * 
	 */
	function getProjectNameByID($id)
	{
		global $db;
		$aInfo = $db->getRecordSet("SELECT name FROM project WHERE id =".$id,1);
		return $aInfo['name'];
	}
	
	/**
	 * ��ȡ��Ŀ��ȫ����Ϣ
	 *
	 * @param unknown_type $id
	 * @return unknown
	 */
	function getProjectInfoByID($id)
	{
		global $db;
		$aInfo = $db->getRecordSet("SELECT * FROM project WHERE id =".$id, 1);
		return $aInfo;
	}
	
	/**
	 * ������Ŀ״̬
	 *
	 * @param int $iProject	- ��ĿID
	 * @param int $iStatus	- ״ֵ̬
	 */
	function changeProjectStatus($iProject, $iStatus = 1)
	{
		global $db;
		$aInfo = $db->getRecordSet("SELECT status FROM `project` WHERE id = ". $iProject, 1);
		if($aInfo['status'] == $iStatus)
			return true;
		else {
			$aField = array();
			$aField['status'] = $iStatus;
			return $db->update("project", $aField, " id=".$iProject);
		}
	}
	
	/**
	 * ���ݿͻ�ID�õ��ͻ���Ŀ�б�
	 *
	 * @param unknown_type $iClientID
	 * @param  enum $iStatus ��0��ʾ���У�1��ʾ��Ͷ��2��ʾͣ�ã�-2��ʾ���л���Ͷ��-1��ʾȫ����
	 * @return  array
	 */
	function getProjectListByClientID($iClientID,$iStatus=-1)
	{
		global $db;
		if($iStatus == -2)
		{
			$sWhere = "(a.status<='1')";
		}
		elseif($iStatus == -1)
		{
			$sWhere = "1";
		}
		elseif($iStatus >=0) 
		{
			$sWhere = "a.status='$iStatus'";
		}
		$sSQL = "SELECT a.*, b.companyName  FROM `project` a LEFT JOIN `client` b ON a.clientID=b.id WHERE $sWhere AND b.id=".$iClientID;
		$aProjectList = $db->getRecordSet($sSQL);
		return $aProjectList;
	}
	
	/**
	 * ���ݿͷ�ID�õ������������ĿID����
	 *
	 * @param unknown_type $iID
	 * @return unknown
	 */
	function getProjectIDSetByKeFuID($iID)
	{
		global $db;
		$sSQL = "SELECT id  FROM `project` WHERE kefuID=".$iID;
		$aList = $db->getRecordSet($sSQL);
		$sIDSet = array2Set($aList, "id");
		return $sIDSet;
	}
	
	/**
	 * ����ҵ��ID�õ������������ĿID����
	 *
	 * @param unknown_type $iID
	 * @return unknown
	 */
	function getProjectIDSetByYeWuID($iID)
	{
		global $db;
		$sSQL = "SELECT id  FROM `project` WHERE yewuID=".$iID;
		$aList = $db->getRecordSet($sSQL);
		$sIDSet = array2Set($aList, "id");
		return $sIDSet;
	}
	
	function searchProject($sKeywords)
	{
		global $db;
		//�����Ƿ���Ҫ�Թؼ��ֽ��д�������+��-���ո��
		if($sKeywords == "")
			$sWhere = "1";
		else 
			$sWhere = "name LIKE '%{$sKeywords}%'";
		$sSQL = "SELECT id,name,clientID FROM `project` WHERE {$sWhere} ORDER BY binary(name) ASC";
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}

	/**
	 * �ж���Ŀ�Ѿ�����
	 *
	 * @param string $sName
	 * @param int $id
	 * @return boolean
	 */
	function isProjectExists($sName,$id=0)
	{
		global $db;
		$sWhere = ($id > 0) ? "id<>$id AND name = '$sName'" : "name = '$sName'";
		$sSQL = "SELECT id FROM `project` WHERE $sWhere";	
		//echo $sSQL;exit;
		if(count($db->getRecordSet($sSQL, 1)) > 0)
			return true;
		else
			return false;
	}
}
?>