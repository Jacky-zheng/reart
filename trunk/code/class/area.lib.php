<?php
/**
 * area.lib.php(地区类)
 * @author xiongzhixin (xzx747@sohu.com) 2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class area
{	
	/**
	 * 获取地区列表
	 *
	 * @param int $pID   父ID
	 * @param int $iGrade 级别(1表示国家，2表示省份，3表示城市)
	 * @return array
	 */
	
	function getAreaArr($pID = 0,$iGrade = 1,$sTbl="area")
	{
		global $db;
		$sSQL = "select id,name from $sTbl where pID = $pID";	
		//echo $sSQL;
		$aList = $db->getRecordSet($sSQL);
		if($aList)
		{
			$aInfo = array2Array($aList,"id","name");
			return $aInfo;
		}
	}	
	
	function getAreaName($id)
	{
		global $db;
		$aInfo = $db->getRecordSet("select name from area where id=$id",1);
		return $aInfo['name'];		
	}
}
?>