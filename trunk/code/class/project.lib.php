<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}

class project
 {	
	/**
	 * 获取项目名称
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
	 * 获取项目的全部信息
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
	 * 更改项目状态
	 *
	 * @param int $iProject	- 项目ID
	 * @param int $iStatus	- 状态值
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
	 * 根据客户ID得到客户项目列表
	 *
	 * @param unknown_type $iClientID
	 * @param  enum $iStatus （0表示空闲；1表示在投；2表示停用；-2表示空闲或在投；-1表示全部）
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
	 * 根据客服ID得到他所负责的项目ID集合
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
	 * 根据业务ID得到他所负责的项目ID集合
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
		//这里是否需要对关键字进行处理，比如+，-，空格等
		if($sKeywords == "")
			$sWhere = "1";
		else 
			$sWhere = "name LIKE '%{$sKeywords}%'";
		$sSQL = "SELECT id,name,clientID FROM `project` WHERE {$sWhere} ORDER BY binary(name) ASC";
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}

	/**
	 * 判断项目已经存在
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