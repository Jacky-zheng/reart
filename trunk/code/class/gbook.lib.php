<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}
/**
 * ������
 *  @author xiongzhixin (xzx747@sohu.com) 2007-01-01
 */

class gbook
{
	/**
	 * �����б�	
	 * @param �������Ա� $sAct
	 * @param �ӵڼ�����¼��ʼ $iStartNo
	 * @param ���� $iNum
	 * @param �������� $iLen	
	 * @param �����ֶ� $sOrderField
	 * @param ������� $sOrder	 
	 * @return array
	 */
	function getGbookList($sAct,$iStartNo,$iNum,$iLen,$sOrderField,$sOrder)
	{
		global $db;		
		$sTbl = $sAct;
		$sGbookTbl = "gbook_".$sAct;	
		
		$sSQL = "SELECT a.id,b.content FROM $sTbl a left join $sGbookTbl b on a.id=b.projectID ORDER BY b.$sOrderField $sOrder LIMIT $iStartNo,$iNum";		
		//echo $sSQL;
		$aList = $db->getRecordSet($sSQL);
		for($i=0; $i<count($aList); $i++)
		{
			$aList[$i]['newContent'] = str_sub($aList[$i]['content'],$iLen);			
			
		}
				
		return $aList;
	}		
}