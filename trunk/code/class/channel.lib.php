<?php
/**
 * channel.lib.php(���λ��)
 * @author xiongzhixin (xzx747@sohu.com) 
 * @package database
 * @version 0.1
 */

class channel
 {	 	
 	// ���λһ�������б�
	function getBigCatList($parentID,$sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE parentID=0";		
		$aList = $db->getRecordSet($sSQL);						
		$sChannelOption = "";
		for($i=0; $i<count($aList); $i++)
		{
			if($parentID == $aList[$i]['id'])
				$sChannelOption .= "<option value='".$aList[$i]['id']."' selected >".$aList[$i]['name']."</option>";
			else 
				$sChannelOption .= "<option value='".$aList[$i]['id']."' >".$aList[$i]['name']."</option>";
		}
		
		return $sChannelOption;
	}
 	
	/**
	 * ���ɷ��������˵����ݹ飩
	 * 	 
	 */
	
	function genOption($pidMe,$pid,$iDepth,$sTbl="channel")
	{
		global $db;
		static $sOption;		
		$sSQL = "select id,name,parentID from $sTbl where parentID =$pid";
		$aRs = $db->getRecordSet($sSQL);			
		$iCounts = count($aRs);	
		for($i=0; $i<$iCounts; $i++)
		{
			$str = ($pid > 0 ) ?  str_repeat("&nbsp;&nbsp;", $iDepth)."&nbsp;&nbsp;&raquo;&nbsp;" : "";
		   	if($pidMe == $aRs[$i]['id']) 
	      		$sOption .= "<option value=".$aRs[$i]['id']." selected>".$str.$aRs[$i]['name']."</option>";
	    	else 
	      		$sOption .= "<option value=".$aRs[$i]['id'].">".$str.$aRs[$i]['name']."</option>";
			self::genOption($pidMe,$aRs[$i]['id'],$iDepth+1); //�ݹ�	
		}
		return $sOption;  				
	}	

	/**
	 * ���λ��¼�б�
	 *
	 * @param int $pid ��-1 ��ʾ����ȡ���й��λ����>0 ��ʾ����ȡ���༰�����ࡱ��
	 * @param bool $bIsAll��true ��ʾ��ȡ�������ֶΡ� false ����ʾȡ��parentID��id��name����
	 * @param int $iStatus ��-1 ��ʾ������״̬�Ĺ��λ����0 ��ʾ�����й��λ����1 ��ʾ����ʹ�ù��λ����2 ��ʾ����ͣ���λ����
	 * @return array
	 */
			
	function channelList($pid,$sTbl="channel",$bIsAll = false,$iStatus = "-1",$sLimit="")
	{		
		global $db;	
		$sNeedField = $bIsAll ? "*" : "parentID,id,name";
		switch ($iStatus)
		{
			case "-1":
				$sStatus = "1";
				break;
			case "-2":
				$sStatus = "status=0 OR status=1";
				break;
			default:
				$sStatus = "status=$iStatus";
				break;
		}
		
		$sWhere = ($pid >=0) ? "( parentID =$pid OR id =$pid) AND ".$sStatus : $sStatus;
		$sSQL = "SELECT {$sNeedField} FROM $sTbl WHERE {$sWhere}  ORDER BY orderID asc $sLimit";		
		$aRs = $db->getRecordSet("$sSQL");	
		return $aRs;
	}

	/**
	 * ���ݹؼ����������λ��¼�б�	
	 * @param string $sKeyword
	 * @param string $sTbl
	 * @param int $pid ��-1 ��ʾ����ȡ���й��λ����>0 ��ʾ����ȡ���༰�����ࡱ��
	 * @param bool $bIsAll��true ��ʾ��ȡ�������ֶΡ� false ����ʾȡ��parentID��id��name����
	 * @param int $iStatus ��-1 ��ʾ������״̬�Ĺ��λ����0 ��ʾ�����й��λ����1 ��ʾ����ʹ�ù��λ����2 ��ʾ����ͣ���λ����
	 * @return array
	 */
				
	function channelListByKeyword($sKeyword,$sTbl="channel",$pid=0,$bIsAll = false,$iStatus = "-1")
	{		
		global $db;	
		$sNeedField = $bIsAll ? "*" : "parentID,id,name";
		switch ($iStatus)
		{
			case "-1":
				$sStatus = "1";
				break;
			case "-2":
				$sStatus = "status=0 OR status=1";
				break;
			default:
				$sStatus = "status=$iStatus";
				break;
		}
		$sWhere = ($pid >=0) ? "(parentID =$pid OR id =$pid) AND ".$sStatus . " AND name like '%$sKeyword%'" : $sStatus . " AND name like '%$sKeyword%'";
		
		//$sWhere .= ($sTbl == "agent_channel") ? " AND userName = '".$_SESSION['agent_userName']."' " : "";
		
		$sSQL = "SELECT {$sNeedField} FROM $sTbl WHERE {$sWhere}";		
		$aRs = $db->getRecordSet("$sSQL");		
		return $aRs;
	}	

		
	/**
	 * ��ʵЧ��ȡ���λ��¼
	 *
	 * @param int $pid ��=0 ��ʾ����ȡ���ࡱ��>0 ��ʾ����ȡ���༰�����ࡱ��	 	 
	 * @param int $iRealEffectID��ʵЧid��ֻ�и������ʵЧ��
	 * @return array
	 */
			
	function channelListByEffect($pid,$iRealEffectID,$sTbl="channel",$sLimit="")
	{		
		global $db;	
		if($iRealEffectID > 0 && $pid == 0)	
		{			
			$sSQL = "SELECT * FROM $sTbl WHERE realEffectID = $iRealEffectID {$sLimit}";	
		}
		else 
		{
			$sSQL = "SELECT * FROM $sTbl WHERE parentID =$pid OR id =$pid {$sLimit}";	
		}
				
		$aList = $db->getRecordSet("$sSQL");
		return $aList;		 		
	}
	
	
	/**
	 * ���ݹ��λС��id��ȡ��ؼ�¼
	 *
	 * @param int $id
	 * @param int $iStatus��-2 ��ʾ������״̬�Ĺ��λ�á���-1 ��ʾ�����к���ʹ��λ�á���0 ��ʾ�����й��λ�á���1 ��ʾ����ʹ�ù��λ�á���2 ��ʾ����ͣ���λ�á���
	 * @return array
	 */
	
	function getInfoByID($id,$sTbl="channel",$sTbl2="web_url",$iStatus = -1)
	{
		global $db;
		if($iStatus >= 0)
			$sSQL = "SELECT a.name as ChanneName, a.type, b.* FROM $sTbl a left join  $sTbl2 b on a.id = b.channelID WHERE a.id = $id and b.status = $iStatus";
		elseif($iStatus == -1)
			$sSQL = "SELECT a.name as ChanneName, a.type, b.* FROM $sTbl a left join $sTbl2 b on a.id = b.channelID 
					 WHERE a.id = $id and ( b.status = 0 or b.status = 1)";	
		else 		
			$sSQL = "SELECT a.name as ChanneName, a.type, b.* FROM $sTbl a left join  $sTbl2 b on a.id = b.channelID WHERE a.id = $id";							
			
		$aInfo = $db->getRecordSet($sSQL);
		
		$aTypeTitle = array("����","ͼƬ","flash","��Ƶ");
				
		for($i=0; $i<count($aInfo); $i++)
		{
			$iType = $aInfo[$i]['type'];			
			$aInfo[$i]['typeTitle'] = $aTypeTitle[$iType];
		}
		return $aInfo;		
	}	
	
	/**
	 * ��ȡ���λ����	������ù��λΪ���࣬����˵õ�����������⻹ȡ���丸������ƣ� * 
	 * @param unknown_type $iChannelID
	 * @return array
	 */
	
	function getChannelNameByID($iChannelID,$sTbl="channel")
	{
		global $db;	
		$sSQL = "SELECT name,parentID FROM $sTbl WHERE id=$iChannelID";
		$aInfo = $db->getRecordSet($sSQL,1);
		if($aInfo['parentID'] > 0) // ����
		{
			$sParentSQL = "SELECT name FROM $sTbl WHERE id = ".$aInfo['parentID'] ;
			$aParentInfo = $db->getRecordSet($sParentSQL,1);	
			return array($aParentInfo["name"], $aInfo["name"]);
		}
		else 
			return array($aInfo["name"]);
	}
	
	
	/**
	 * ��ȡ���λ���� * 
	 * @param unknown_type $iChannelID
	 * @return array
	 */
	
	function getChannelTypeByID($iChannelID,$sTbl="channel")
	{
		global $db;	
		$sSQL = "SELECT type FROM $sTbl WHERE id=$iChannelID";
		$aInfo = $db->getRecordSet($sSQL,1);
		return $aInfo["type"];
	}
	
	/**
	 * ��ȡ���λ����	������ù��λΪ���࣬����˵õ�����������⻹ȡ������������ƣ� * 
	 * @param unknown_type $iChannelID
	 * @return array
	 */
	
	function getChannelNameByID_1($iChannelID,$sTbl="channel")
	{
		global $db;	
		$iNum = $db->getRowsNum("SELECT id FROM $sTbl WHERE parentID=$iChannelID");
		$sSQL = "SELECT name FROM $sTbl WHERE id = $iChannelID";
		$sSQL .= ($iNum > 0) ? " OR parentID = $iChannelID ORDER BY id asc" : ""; 
		//echo $sSQL;
		$aList = $db->getRecordSet($sSQL);
		return $aList;
	}	
	
	/**
	 * ��ȡ���λ������
	 *
	 * @param int $webURLID ���λ��id
	 * 
	 */
	function getWebURLNameByID($iWebURLID,$sTbl="web_url")
	{
		global $db;
		$aInfo = $db->getRecordSet("SELECT name FROM $sTbl WHERE id =".$iWebURLID,1);
		return $aInfo['name'];
	}
	
	/**
	 * ��ȡ���λ������
	 *
	 * @param int $webURLID ���λ��id
	 * 
	 */
	function getWebURLBannerIDByID($iWebURLID,$sTbl="web_url")
	{
		global $db;
		$aInfo = $db->getRecordSet("SELECT bannerID FROM $sTbl WHERE id =".$iWebURLID,1);
		return $aInfo['bannerID'];
	}
	
	/**
	 * ��ȡchannelID		
	 *
	 * @param unknown_type $iParentID
	 * @return unknown
	 * @author SiYunXian - 2006-11-22
	 */
	function getChannelIDByParentID($iParentID,$sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT id FROM $sTbl WHERE parentID = " . $iParentID;
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * ��ȡ����͵�ַ
	 *
	 * @param unknown_type $iChannelID
	 * @return unknown
	 * @author SiYunXian - 2006-11-22
	 */
	function getWebURLInfoByChannelID($iChannelID,$iStatus = 1,$sTbl="web_url")
	{
		global $db;
		$sSQL = "SELECT id,adTitle,adWebPage FROM $sTbl WHERE channelID = " . $iChannelID . " AND status = " . $iStatus;
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}	
	
	
	/**
	 * ȡ�����й��λ����
	 *
	 * @return unknown
	 * @author SiYunXian - 2006-11-27
	 */
	function getAllChannelName($sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT id,name FROM $sTbl";
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * ����$iChannelID��ȡparentID
	 * @param unknown_type $iChannelID
	 * @return unknown
	 * @author SiYunXian - 2006-11-28
	 */
	function getParentIDByChannelID($iChannelID,$sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT DISTINCT parentID FROM $sTbl WHERE id in " . $iChannelID;
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * ����$iChannelID��ȡ������
	 *
	 * @param unknown_type $iChannelID
	 * @return unknown
	 */
	function getParentNameByChannelID($iChannelID,$sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE id = '" . $iChannelID . "'";
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * Enter description here...
	 
	 * @param int $iChannelID
	 * @param int $iStatus
	 * @param string $sTbl
	 * @param string $sTbl2
	 */
	function getWebUrlByChannelID($iChannelID,$iStatus = "1",$sTbl="channel",$sTbl2 = "web_url",$sUserName="")
	{
		global $db;
		$sWhere = ($iStatus <> '-1')  ? "status = '$iStatus'" : "1";
		//echo $sWhere;
		$sChannelList = channel::getChannelSubID($iChannelID,$sTbl);
		$sWhere .= " AND channelID in $sChannelList";
		$sUserName = ($_SESSION['agent_userName']) ? $_SESSION['agent_userName'] : $sUserName;
		//echo "lib".$sUserName."<br>";
		
		if($sTbl2 == "agent_web_url") $sWhere .= " AND userName='$sUserName'";
		$aList = $db->getRecordSet("SELECT * FROM `$sTbl2` WHERE $sWhere order by id asc"); // status='1' AND 		
		return $aList;		
	}		
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $iChannelID
	 * @return unknown
	 */
	function getChannelSubID($iChannelID,$sTbl="channel")
	{
		global $db;
		$aChannelList = $db->getRecordSet("SELECT id FROM `$sTbl` WHERE id=".$iChannelID." OR parentID=".$iChannelID);
		$sChannelList = array2Set($aChannelList, "id");
		return $sChannelList;
	}
	
	/**
	 * ��ȡʵЧ����
	 *
	 * @param unknown_type $iID
	 * @return unknown
	 * @author SiYunXian (s_lion@163.com) - 2006-11-28
	 */
	function getRealEffectInfoByID($iID)
	{
		global $db;
		$sSQL = "SELECT id,name FROM real_effect WHERE id = " . $iID;
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * ��ȡ����ʵЧ��Ϣ
	 *
	 * @return unknown
	 * @author SiYunXian (s_lion@163.com) - 2006-11-28
	 */
	function getAllRealEffectInfo()
	{
		global $db;
		$sSQL = "SELECT * FROM real_effect";
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;
	}
	
	/**
	 * ����parentID��÷�������
	 * @author SiYunXian - 2006.12.31
	 * @param unknown_type $iParentID
	 * @return unknown
	 */
	function getChannelNameByParentID($iParentID = 0,$sTbl="channel")
	{
		global $db;
		$sSQL = "SELECT id,name FROM $sTbl WHERE parentID=$iParentID AND status=1";
		$aInfo = $db->getRecordSet($sSQL);
		return $aInfo;		
	}
	
	/**
	 * ��ȡ���λ������
	 *
	 * @param int $iWebUrlID
	 * @param int $iSort  0��ʾ���� >0��ʾ����
	 */
	function getChannelNameByWebUrlID($iWebUrlID,$iSort = 0,$sTbl="channel",$sTbl2="web_url")
	{
		global $db;
		$sWhere = "id = $iWebUrlID";
		$sWhere .= ($sTbl2 == "agent_web_url") ? " AND userName='".$_SESSION['agent_userName']."'" : "";
		$aTemp = $db->getRecordSet("select channelID,name from $sTbl2 where $sWhere",1);
		$iChannelID = $aTemp['channelID'];		
		// ���λ��		
		$aTemp1 = $db->getRecordSet("select parentID,name from $sTbl where id=$iChannelID",1);
		$aTemp2 = $db->getRecordSet("select name from $sTbl where id=".$aTemp1['parentID'],1);
		$sStr = ($iSort == 0) ? $aTemp2['name']."&nbsp;&raquo;&nbsp;".$aTemp1['name']."&nbsp;&raquo;&nbsp;".$aTemp['name'] : 
				$aTemp['name']."<br>&uarr;<br>".$aTemp1['name']."<br>&uarr;<br>".$aTemp2['name'];
		return $sStr;
	}
	
	/**
	 * ��ȡ���λ������
	 *
	 * @param int $iWebUrlID
	 * @param int $iSort  0��ʾ���� 1��ʾ����
	 */
	function getChannelNameByChannelID($iChannelID,$sTbl="channel")
	{
		global $db;	
		
		// ���λ��		
		$aTemp1 = $db->getRecordSet("select parentID,name from $sTbl where id=$iChannelID",1);
		$aTemp2 = $db->getRecordSet("select name from $sTbl where id=".$aTemp1['parentID'],1);
		$sStr =  $aTemp2['name']."&nbsp;&raquo;&nbsp;".$aTemp1['name']."&nbsp;&raquo;&nbsp;".$aTemp['name'];
		return $sStr;
	}
	
	
	
	
}
?>