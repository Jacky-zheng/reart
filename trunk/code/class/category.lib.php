<?php
/**
 * 类别操作类
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class category
{
	/**
	 * 提取父类列表
	 *
	 * @param string $sTbl （类别表名）
	 * @return array
	 */
	function pCatList($sTbl)
	{
		global $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE pID = 0 order by orderID ";
		//echo $sSQL;
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}
	
	/**
	 * 按父类id提取其子类列表
	 *
	 * @param string $sTbl
	 * @param $pID （父类id）
	 * @param $isDisplaySelf （是否显示本身）
	 * @param $iCorporationID （企业会员ID）
	 * @return array
	 */
	
	function subCatListByID($sTbl,$pID,$isDisplaySelf=0,$iCorporationID=0)
	{
		global $db;
		$sWhere = $isDisplaySelf ? "(pID=$pID OR id=$pID)" : "pID=$pID";
		$sWhere .= ($iCorporationID >0) ? " AND corporationID = $iCorporationID" : "";
		$sSQL = "SELECT * FROM $sTbl WHERE $sWhere order by orderID";		
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}
	
	/**
	 * 根据类别id取得类别名称，如果是子类，则同时获取父类的名称
	 *
	 * @param string $sTbl
	 * @param int $id
	 * @param int $iSort  0表示横排－， 1表示横排→， 2表示竖排
	 * @return string
	 */
	
	function getCatNameByID($sTbl,$id,$iSort = 0)
	{
		if($id > 0)
		{
			$aList = category::getSingleCatInfoByID($sTbl,$id); //			
			$aPList = category::getSingleCatInfoByID($sTbl,intval($aList['pID']));		
			//$sCatName = $aPList	? $aPList['name']." → ".$aList['name'] : $aList['name'];		
			
			if($iSort == 0)
				$sCatName = $aPList	? $aPList['name']."－".$aList['name'] : $aList['name'];		
			elseif($iSort == 1) 
				$sCatName = $aPList	? $aPList['name']." → ".$aList['name'] : $aList['name'];
			else
				$sCatName = $aList['name']."<br>&uarr;<br>".$aPList['name'];	
		}
		return $sCatName;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sTbl
	 * @param unknown_type $id
	 */
	
	function getSingleCatInfoByID($sTbl,$id)
	{
		global $db;		
		$sSQL = "SELECT name,pID from $sTbl WHERE id=$id";
		$aList = $db->getRecordSet($sSQL,1);
		//print_r($aList);
		return $aList;
	}

	function getSubID($sTbl,$pID)
	{
		global $db;
		$sSQL = "SELECT id FROM $sTbl WHERE pID = $pID OR id=$pID";
		//echo $sSQL."<br>";
		$aList = $db->getRecordSet($sSQL);
		//print_r($aList);
		$sCID = array2Set($aList,"id");	
		return $sCID;		
	}
	
	/**
	 * 生成分类下拉菜单（递归）
	 * @param int $iMaxDepth  -1表示无限级分类； 0表示一级分类； 1表示二级分类；以此类推
	 */
	
	function getCatOptions($sTbl,$iMaxDepth=-1,$pidMe=0,$pid=0,$iDepth=0,$bIsFirst=true)
	{
		global $db;
		static $sOption;
		if($bIsFirst) $sOption = "";
		$sSQL = "select id,name,pID from $sTbl where pID =$pid order by orderID asc";
		$aRs = $db->getRecordSet($sSQL);			
		$iCounts = count($aRs);	
		for($i=0; $i<$iCounts; $i++)
		{
			$str = ($pid > 0 ) ?  str_repeat("&nbsp;&nbsp;", $iDepth)."&nbsp;&nbsp;&raquo;&nbsp;" : "";
		   	if($pidMe == $aRs[$i]['id']) 
	      		$sOption .= "<option value=".$aRs[$i]['id']." selected>".$str.$aRs[$i]['name']."</option>";
	    	else 
	      		$sOption .= "<option value=".$aRs[$i]['id'].">".$str.$aRs[$i]['name']."</option>";
	      		
			if($iMaxDepth== -1 || $iMaxDepth>$iDepth) 
				self::getCatOptions($sTbl,$iMaxDepth,$pidMe,$aRs[$i]['id'],$iDepth+1,false); //递归	
		}
		return $sOption;  				
	}	
	
	/**
	 * 取出所有类
	 *
	 */
	function getCatOptions_bak($sTbl)
	{
		global  $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE pID=0 order by orderID asc ";
		$aTemp = $db->getRecordSet($sSQL);
		//print_r($aTemp); 
		$aList = category::getSubCatOptions($sTbl,$aTemp[0]['id']);
				 
		for($i=1; $i<count($aTemp); $i++) 
		{
			$aList = array_merge($aList,category::getSubCatOptions($sTbl,$aTemp[$i]['id']));
			//$aList = array_merge($aList,$aSubTemp);
		}
		//print_r($aList); exit;
		$aList = array2Array($aList,"id","name");
		return $aList;
	}
	
	function getSubCatOptions($sTbl,$pID)
	{
		global  $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE pID=$pID OR id=$pID order by orderID asc";
		$aList = $db->getRecordSet($sSQL);
			 
		for($i=0; $i<count($aList); $i++) 
		{
			if($aList[$i]['id'] <> $pID) $aList[$i]['name'] = "&nbsp;&nbsp;&raquo;&nbsp;".$aList[$i]['name'];
		}
		//print_r($aList); exit;
		return $aList;
	}
	
	/**
	 * 得到某类别所有子类的一维数组
	 *
	 * @param unknown_type $pID
	 */
	function getCatArrByPID($pID = 0,$sTbl)
	{
		global $db;
		$sSQL = "select id,name from $sTbl where pID = $pID order by orderID asc";
		$aList = $db->getRecordSet($sSQL);
		$aInfo = array2Array($aList,"id","name");
		return $aInfo;
	}	
}
?>