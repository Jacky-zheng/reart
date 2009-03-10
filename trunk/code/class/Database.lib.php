<?php
/**
 * ���ݿ⴦����,ֻ�ܴ���Mysql�������ݿ�
 * @author xiongzhixin (xzx747@sohu.com)
 * @package database
 * @version 0.1
 */

class Database 
{	
	var $__queryNum = 0;	
	/**
	 * ���캯��
	 *
	 * @param string $sDBHost
	 * @param string $sDBName
	 * @param string $sDBUser
	 * @param string $sDBPwd
	 */
	function Database($sDBHost, $sDBName, $sDBUser, $sDBPwd, $bDebug = 0) {
		$this->__DBHost		= $sDBHost;
		$this->__DBName		= $sDBName;
		$this->__DBUser		= $sDBUser;
		$this->__DBPwd		= $sDBPwd;
		$this->__debug		= $bDebug;
	}
	
	/**
	 * �������ݿ�
	 *
	 * @return true on Sucess,False on Failure
	 */
	function connect() {		
		//echo $this->__DBHost."<br>".$this->__DBUser."<br>".$this->__DBPwd."<br>".$this->__DBName;		
		$this->__moDB = mysql_connect($this->__DBHost, $this->__DBUser, $this->__DBPwd);		
		mysql_select_db($this->__DBName, $this->__moDB);
		return true;
	}
	
	
	
	/**
	 * ִ��query����
	 *
	 * @param string $sSQL
	 * @return resource
	 */
	function query($sSQL) {
		$this->__queryNum++;
		if($this->__debug)
			$this->showDebug($sSQL);
		//�ж�������ûdelete��insert,update��������Щ����������������ִ��
		$this->__moQuery = mysql_query($sSQL, $this->__moDB);
		return $this->__moQuery;
	}
	
	/**
	 * �õ���¼����
	 *
	 * @param unknown_type $sSQL
	 * @return unknown
	 */
	function getRecordSet($sSQL, $iCount = NULL) {
		//������ע��Σ����sql�в��ܳ���delete��update
		$aRes = $this->query($sSQL);
		$aList = array();
		while ($rr = mysql_fetch_array($aRes, MYSQL_ASSOC)) {
			$aList[] = $rr;
		}
		if($iCount <> 1)
			return $aList;
		else 
			return $aList[0];
	}
	
/**
	 * �������ݵ�ָ�������ݱ�
	 *
	 * @param string $sTableName
	 * @param array $aField
	 */
	function insert($sTableName, $aField) {
		$sSQL = "INSERT INTO `{$sTableName}` ";
		$sField = "(";
		$sValue = "(";
		foreach ($aField as $rk => $rv) {
			$sField .= $rk.",";
			$sValue .= "'".$rv."',";			
		}
		$sField = substr($sField, 0, -1).")";
		$sValue = substr($sValue, 0, -1).")";
		$sSQL .= $sField." VALUES ".$sValue;
		$this->__queryNum++;
		if($this->__debug)
			$this->showDebug($sSQL);
		mysql_query($sSQL,$this->__moDB);
		$iInsertID = mysql_insert_id($this->__moDB);
		return $iInsertID;		
	}
	
	/**
	 * ���²���
	 *
	 * @param string $sTableName
	 * @param array $aField
	 * @param string $sWhere
	 */
	function update($sTableName, $aField, $sWhere) {
		$sSQL = "UPDATE {$sTableName} SET ";
		$sField = "";
		foreach ($aField as $rk => $rv) {
			$sField .= $rk."='".$rv."',";
		}
		$sField = substr($sField, 0, -1);
		$sSQL .= $sField." WHERE {$sWhere}";
		$this->__queryNum++;
		if($this->__debug)
			$this->showDebug($sSQL);
		return mysql_query($sSQL,$this->__moDB);
	}
	
	/**
	 * ɾ��
	 *
	 * @param string $sTableName
	 * @param string $sWhere
	 */
	function delete($sTableName, $sWhere) {
		$sSQL = "DELETE FROM `{$sTableName}` WHERE {$sWhere}";
		$this->__queryNum++;
		if($this->__debug)
			$this->showDebug($sSQL);
		return mysql_query($sSQL,$this->__moDB);
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $oQuery
	 * @return unknown
	 */
	function num_rows($oQuery) {
		$query = mysql_num_rows($oQuery);
		return $query;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $oQuery
	 * @return unknown
	 */
	function num_fields($oQuery) {
		return mysql_num_fields($oQuery);
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $oQuery
	 * @param unknown_type $iRow
	 * @param unknown_type $sField
	 */
	function result($oQuery, $iRow, $sField) {
		return mysql_result($oQuery, $iRow, $sField);
	}
	
	/**
	 * �õ���ѯ�������
	 *
	 * @param string $sSQL
	 * @return unknown
	 */
	function getRowsNum($sSQL) {
		$oQuery = $this->query($sSQL);
		if(strpos(strtolower($sSQL),"count("))
		{
			$aRes = mysql_fetch_array($oQuery);
			return $aRes[0];
		}
		else
		{
			$iNums =(mysql_num_rows($oQuery)) ? mysql_num_rows($oQuery) : 0;
			return $iNums;			
		}
	}
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sMsg
	 * @param unknown_type $isDie
	 */
	function error($sMsg, $isDie = 0) {
		//TO DO....
		echo "error";
		//require_once('');
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sSQL
	 */
	function showDebug($sSQL) {
		echo "<br />{$this->__queryNum}.&nbsp;SQL:$sSQL";
	}
	
	
	/**
	 * �ж������Ƿ��Ѿ�����
	 *
	 * @param string $sTable	- ��ѯ�ı�
	 * @param string $sWHERE	- ��ѯ����
	 * @param int $iType		- ���ͣ�$iType=0��ʾ��ӣ�$iType=1��ʾ�޸�
	 * @return unknown
	 */
	function isExists($sTable,$sWHERE,$iType=0)
	{
		//return false;
		global $db;
		$sSQL = "SELECT id FROM " . $sTable . " WHERE " . $sWHERE;
		//echo $sSQL;exit;
		if(count($db->getRecordSet($sSQL, 1)) > $iType)
			return true;
		else
			return false;
	}	
}
?>