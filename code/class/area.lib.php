<?php
/**
 * area.lib.php(������)
 * @author xiongzhixin (xzx747@sohu.com) 2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class area
{	
	/**
	 * ��ȡ�����б�
	 *
	 * @param int $pID   ��ID
	 * @param int $iGrade ����(1��ʾ���ң�2��ʾʡ�ݣ�3��ʾ����)
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