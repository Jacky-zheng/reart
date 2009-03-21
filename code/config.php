<?php
/**
 * config.php （DB Connect）
 */
//error_reporting(0);
DBconnect(0);

/**
 * 连接数据库
 *
 * @param int $flag  （0 表示网站； 1 表示bbs）
 */

function DBconnect($flag=0)
{
	$DBHost	= "localhost";
	if($flag == 0)
	{
		$DBUser	= "root";		
		$DBPwd	= "";				
		$DBName	= "ruiyi";
	}
	elseif($flag == 1)
	{
		$DBUser	= "bbs";
		$DBPwd	= "!@#bbscn315)(*";	
		$DBName	= "bbs";		
	}
	
	mysql_connect($DBHost,$DBUser,$DBPwd);
	mysql_select_db($DBName);	
	if($flag == 1) mysql_query("SET character_set_connection=gbk, character_set_results=gbk, character_set_client=binary ");
}

/**
 * 获取符合条件的记录总数
 *
 * @param unknown_type $sSQL
 */

function getRowsNum($sSQL)
{	
	//echo $sSQL;
	$mRes  = mysql_query($sSQL);
		//$oQuery = $this->query($sSQL);
		if(strpos(strtolower($sSQL),"count("))
		{
			$aRes = mysql_fetch_array($mRes);
			return $aRes[0];
		}
		else
		{
			$iNums =(mysql_num_rows($mRes)) ? mysql_num_rows($mRes) : 0;
			return $iNums;			
		}	
	
	//$iRows = @intval(mysql_num_rows($mRes));
	
	//$iNums = isset($irw) ? mysql_num_rows($mRes) : 0;
	//return $iRows;
}

function getRecordSet($sSQL, $iCount = NULL)
{
	$aRes = mysql_query($sSQL);	
	$aList = array();
	while ($rr = mysql_fetch_array($aRes)) $aList[] = $rr;
	if($iCount <> 1)
		return $aList;
	else 
		return $aList[0];
}

/**
	 * 插入数据到指定的数据表
	 *
	 * @param string $sTableName
	 * @param array $aField
*/

function insert($sTableName, $aField) 
{
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
		mysql_query($sSQL);
		$iInsertID = mysql_insert_id();
		return $iInsertID;		
}

/**
 * 更新数据操作
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
	return mysql_query($sSQL);
}
/**
 * 检测用户名是否已经存在
 * @param string $aField
 * @return true or false
 */
function checkNameRepeat( $aField )
{
	$sSQL = "SELECT count(userName) as num FROM member WHERE userName ='".$aField."'";
	$sQUE = mysql_query($sSQL);
	if ($sQUE["num"] < 0 ) return true;
	else return false;	
}
/**
 * 检测邮箱格式
 * @param string $aField
 * @return true or false
 */
function checkEmail( $aField )
{
	$email = preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$aField);
	if ($email) return true;
	else return false;
}
/**
 * 检测登陆
 * @param $arr array
 * @return true or false
 * 
 */
function checkUserLogin($arr)
{
	$sql = "SELECT * FROM member WHERE userName='".$arr["userName"]."' AND pwd='".md5($arr["pwd"])."'";
	$que = mysql_query($sql);
	if ($que) return true;
	else return false;
}
function checkUserState()
{
	
}
define("TIME_INTERVAL",60*60*12);		//cookie时间间隔  （12 hour）
$__WEB_URL = "http://www.cn315.cc";		//网址
?>