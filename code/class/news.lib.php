<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}
/**
 * 资讯类
 *  @author xiongzhixin (xzx747@sohu.com) 2007-07-10
 */

class news
{
	/**
	 * 新闻列表
	 *	
	 * @param 从第几条记录开始 $iStartNo
	 * @param 条数 $iNum
	 * @param 所属类别 $iCID 
	 * @param 条件 $sWhere	 
	 * @param 排序 $sOrder
	 * @param 需要显示的字段 $sNeedField 	 
	 * @param 资讯表 $sTbl
	 * @param 状态 $status
	 * @param 简介字数 $iLen
	 * @return array
	 */
	function getNewsList($iStartNo,$iNum,$cID=0,$sWhere="",$sOrder="",$sNeedField="",$sTbl="news",$iStatus='1',$iLen=0)
	{
		global $db;	
		loadLib("category");
		$sBasicField = "title,fileName,cID";
		if($sTbl == "news" || $sTbl =="union1")  
			$sBasicField .= ",hangyeID";
		
		$sNeedField = $sNeedField ? $sNeedField.",".$sBasicField : $sBasicField;
				
		$sBasicOrder = " addDate desc";
		$sOrder = ($sOrder) ? $sOrder.",".$sBasicOrder : $sBasicOrder;
		
		$sWhere = ($sWhere) ? $sWhere : 1;		
		$sWhere .= " AND status in('1','3')";
		
		$sWhere .= ($cID > 0) ? " AND cID in ".category::getSubID($sTbl."_class",$cID) : "";
		
		$sSQL = "SELECT $sNeedField FROM $sTbl WHERE $sWhere ORDER BY $sOrder LIMIT $iStartNo,$iNum";						
		$aList = ($iNum > 1) ? $db->getRecordSet($sSQL) : $db->getRecordSet($sSQL,1);
		if(strstr($sNeedField,"hangye") && $iNum > 1)
		{
			for($i=0; $i<count($aList); $i++)
			{
				$iHangyeID = $aList[$i]['hangyeID'];
				$aField = $db->getRecordSet("select name from hangye where id = $iHangyeID",1);
				$aList[$i]['hangye'] = $aField['name'];
			}
		}
		return $aList;
	}
	
	/**
	 * 代理商新闻列表
	 *	
	 * @param 从第几条记录开始 $iStartNo
	 * @param 条数 $iNum
	 * @param 所属类别 $iCID 
	 * @param 条件 $sWhere	 
	 * @param 排序 $sOrder
	 * @param 需要显示的字段 $sNeedField 	 
	 * @param 资讯表 $sTbl
	 * @param 状态 $status
	 * @param 简介字数 $iLen
	 * @return array
	 */
	
	function getAgentNewsList($iStartNo,$iNum,$cID=0,$sWhere="",$sOrder="",$sNeedField="",$sTbl="agent_news",$iStatus='1',$iLen=0,$sUserName="")
	{
		global $db;	
		loadLib("category");
		
		if($cID==0)
		{
		 	$iFlag = 0;
		}
		else  
		{
			$sWhere1=($sUserName)?" AND userName='$sUserName'":"";
			$sSQL1="select * from agent_class where sID=$cID".$sWhere1;
			$aAgent_newsClass=$db->getRecordSet($sSQL1,1);
			$iFlag = $aAgent_newsClass['flag'];
		}
		
		if($iFlag == 0)
	    {
		    $sTbl="default_news";
	    }
		
		$sBasicField ="title,fileName,cID";
		$sNeedField = $sNeedField ? $sNeedField.",".$sBasicField : $sBasicField;
		
		//$sBasicOrder = " id desc";
		$sBasicOrder = " addDate desc";
		$sOrder = ($sOrder) ? $sOrder.",".$sBasicOrder : $sBasicOrder;
		
		$sWhere = ($sWhere) ? $sWhere : 1;
		$sWhere .= " AND status in('1','3')";
		
		$sTbl2="agent_class";
		if($sTbl=="default_news")
		{
			//$sTbl2="default_class";
			$cID=$aAgent_newsClass['sID'];
		}
		
		$sWhere .= ($cID > 0) ? " AND cID =$cID " : "";
		
		
		$sSQL = "SELECT $sNeedField FROM $sTbl WHERE $sWhere ORDER BY $sOrder LIMIT $iStartNo,$iNum";						
		$aList = ($iNum > 1) ? $db->getRecordSet($sSQL) : $db->getRecordSet($sSQL,1);
	
		return $aList;
	}
}