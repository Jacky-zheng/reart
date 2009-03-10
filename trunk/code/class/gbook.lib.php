<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}
/**
 * 留言类
 *  @author xiongzhixin (xzx747@sohu.com) 2007-01-01
 */

class gbook
{
	/**
	 * 留言列表	
	 * @param 具体留言表 $sAct
	 * @param 从第几条记录开始 $iStartNo
	 * @param 条数 $iNum
	 * @param 标题字数 $iLen	
	 * @param 排序字段 $sOrderField
	 * @param 升序或倒序 $sOrder	 
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