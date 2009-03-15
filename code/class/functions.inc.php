<?php
/**
 * ���ؿ��ļ�
 *
 * @param string $sLibName
 */
function loadLib($sLibName) {
	$sLibFullName = $sLibName.".lib.php";
	//echo ROOT;
	require_once(ROOT."./class/".$sLibFullName);
}


/**
 * ǰ̨��ҳ����(α��̬��ҳ)
 *
 * @param string $sPage  	- ��ʾ��ҳ��
 * @param int $iTotalNum	- ����
 * @param int $iPerpage		- ÿҳ��ʾ����
 * @param int $iPageNo		- ��ǰҳ��
 * @param string $sExt		- ��������
 */
function dividePage_1($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt,$bIsDiv=1)
{
	global $tpl;
	//��ʼ��ʾ����Ŀ
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//���ж���ҳ
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;	
	
	$sStr = " <div class=\"mainipselc\">";
		
	$sStr .= "��<span class=\"colorsb\">{$iPageNo}</span>ҳ</span>  <span class=\"colorsc\">��<span class=\"colorsb\">{$iTotalPage}</span>ҳ ";	
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//��ǰҳ����1����һҳû������    	
    	$sStr .= "��ǰҳ ";
    	
    } else {
    	//��ǰҳ������1����һҳ������
    	//$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>��ǰҳ</a> ";
    	$sStr .= "<a href='{$sPage}_1.html'>��ǰҳ</a> ";
    }
    //�ж���һҳ
    if($iPrev < 1) {
    	//û����һҳ
    	$sStr .= "  ��һҳ ";
    } else {
    	//����һҳ
    	//$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>��һҳ</a> ";
    	$sStr .= "<a href='{$sPage}_{$iPrev}.html'>��һҳ</a> ";
    }
    //�ж���һҳ
    if ($iNext > $iTotalPage) {
    	//û����һҳ��
        $sStr .= "��һҳ ";
    } else {
    	//������һҳ
    	//$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>��һҳ</a> ";
    	$sStr .= "<a href='{$sPage}_{$iNext}.html'>��һҳ</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "��ĩҳ";
    } else {
    	$sStr .= "<a href='{$sPage}_{$iTotalPage}.html'>��ĩҳ</a> ";
    }
    $sStr .= "</div>";
       
	$tpl->assign("Divide_Page", $sStr);
}

/**
 * ǰ̨��ҳ����(������ҳ)
 *
 * @param string $sPage  	- ��ʾ��ҳ��
 * @param int $iTotalNum	- ����
 * @param int $iPerpage		- ÿҳ��ʾ����
 * @param int $iPageNo		- ��ǰҳ��
 * @param string $sExt		- ��������
 */


function dividePage_2($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt,$bIsDiv=1)
{
	global $tpl;
	//��ʼ��ʾ����Ŀ
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//���ж���ҳ
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;	
	
	$sStr = ($bIsDiv ==1) ? " <div class=\"mainipselc\">" : "";
		
	$sStr .= "��<span class=\"colorsb\">{$iPageNo}</span>ҳ</span>  <span class=\"colorsc\">��<span class=\"colorsb\">{$iTotalPage}</span>ҳ ";	
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//��ǰҳ����1����һҳû������    	
    	$sStr .= "��ǰҳ ";
    	
    } else {
    	//��ǰҳ������1����һҳ������
    	$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>��ǰҳ</a> ";
    }
    //�ж���һҳ
    if($iPrev < 1) {
    	//û����һҳ
    	$sStr .= "  ��һҳ ";
    } else {
    	//����һҳ
    	$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>��һҳ</a> ";
    }
    //�ж���һҳ
    if ($iNext > $iTotalPage) {
    	//û����һҳ��
        $sStr .= "��һҳ ";
    } else {
    	//������һҳ
    	$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>��һҳ</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "��ĩҳ";
    } else {
    	$sStr .= "<a href='{$sPage}?pageNo={$iTotalPage}&{$sExt}'>��ĩҳ</a> ";
    }
    $sStr .=($bIsDiv ==1) ? "</div>" : "";
       
	$tpl->assign("Divide_Page", $sStr);
}


/**
 * ��ҳ����
 *
 * @param string $sPage  	- ��ʾ��ҳ��
 * @param int $iTotalNum	- ����
 * @param int $iPerpage		- ÿҳ��ʾ����
 * @param int $iPageNo		- ��ǰҳ��
 * @param string $sExt		- ��������
 */
function dividePage($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt)
{
	global $tpl;
	//��ʼ��ʾ����Ŀ
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//���ж���ҳ
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;
	
	$sStr = " <table width='100%' border='1' cellspacing='0' cellpadding='0' align='center' bordercolordark='#FFFFFF' bordercolorlight='#000000'  bgcolor='#efefef'><tr align=center><td>��";
	$sStr .= "��".$iTotalNum."����¼,ÿҳ��ʾ{$iPerpage}�����г���".$iPageStart;
	$sStr .= "����";
	$sStr .= $iEndPage;
	$sStr .= "�� ";
	$sStr .= "</td>  <td> <div align='center'>";
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//��ǰҳ����1����һҳû������
    	$sStr .= "��һҳ";
    } else {
    	//��ǰҳ������1����һҳ������
    	$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>��һҳ</a> ";
    }
    //�ж���һҳ
    if($iPrev < 1) {
    	//û����һҳ
    	$sStr .= "  ��һҳ ";
    } else {
    	//����һҳ
    	$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>��һҳ</a> ";
    }
    //�ж���һҳ
    if ($iNext > $iTotalPage) {
    	//û����һҳ��
        $sStr .= "��һҳ ";
    } else {
    	//������һҳ
    	$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>��һҳ</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "���һҳ";
    } else {
    	$sStr .= "<a href='{$sPage}?pageNo={$iTotalPage}&{$sExt}'>���һҳ</a> ";
    }
    $sStr .= "</div> </td> <td width='15%'> ";
    $sStr .= "��".$iPageNo."/".$iTotalPage."ҳ ";
    $sStr .=  "</td> <form name=form1 method=post action={$sPage}?{$sExt}><td width='15%' align=center><input name=pageNo type=text class='form_text' size=2  value=$iPageNo> <input type=submit name=Submit2 value=go class='button'></td> </form></tr></table>";
	$tpl->assign("Divide_Page", $sStr);
}


/**
 * ��תҳ��
 *
 * @param string $sURL
 * @param integer $iTime
 * @param string $sMsg
 */
function redirect($sURL, $iTime, $sMsg = "",$bIsLogin = "") {
	global $tpl;
	$tpl->assign("sURL", $sURL);
	$tpl->assign("iTime", $iTime);
	$tpl->assign("sMSG", $sMsg);
	if($bIsLogin)
		$tpl->display("admin/redirect_login.tpl.htm");
	else 
		$tpl->display("admin/redirect.tpl.htm");	
	exit;	
}


/** �������ת **/
function redirect_error($sMsg)
{
	echo "<script>alert('$sMsg');history.go(-1);</script>";
	//exit;
}

/**
 * ����ҳ��
 *
 * @param unknown_type $sMsg
 */
function showError($sMsg) {
	echo $sMsg;
	exit;
}



/**
 * Enter description here...
 *
 * @param unknown_type $sStr
 * @param unknown_type $iStart
 * @param unknown_type $iNum
 * @param unknown_type $iSuffix
 */
function cutString($sStr, $iStart=0, $iNum, $iSuffix='') {
	
}

//ȡIP
function getIP() {
	if (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		}
		elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		}
		elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
}

/**
 * ����ת���ɼ���
 *
 * @param array $aArr
 * @param string $sField
 * @return string
 */
function array2Set($aArr,$sFieldName = NULL)
{
	$t = "";
	$iArrayLength = count($aArr);
	if($iArrayLength == 0)
		return "(-1)";
	for($i = 0; $i <$iArrayLength; $i++)
	{
		if($i <> ($iArrayLength -1) )
		{
			if($sFieldName == "")
				$t .= "\"".$aArr[$i]."\",";
			else 
			{
				if($sFieldName <> NULL)
					$t .= "\"".$aArr[$i][$sFieldName]."\",";
				else 
					$t .= "\"".$aArr[$i]."\",";
			}
		}
		else
		{ 
			if($sFieldName == "")
				$t .= "\"".$aArr[$i]."";
			else 
			{
				if($sFieldName <> NULL)
					$t .= "\"".$aArr[$i][$sFieldName]."";
				else 
					$t .= "\"".$aArr[$i]."";
			}
		}
	}
	return $t;
}

/**
 * ����ת���ɼ���
 *
 * @param array $aArr
 * @return string
 */
function array2Str($aArr)
{
	$t = "";
	$t ="(".implode(',',$aArr).")";
	return $t;
}

/**
 * �����е�һά��Ϊkey��һά��Ϊvalue
 *
 * @param array $aArray
 * @param string $sFieldName1	- key
 * @param string $sFieldName2	- value
 * @return array
 */
function array2Array($aArray, $sFieldName1, $sFieldName2)
{
	$t = array();
	foreach ($aArray as $rr)
		$t[$rr[$sFieldName1]] = $rr[$sFieldName2];
	return $t;
}

/**
 * ȡ�ú�������ں���  
 *
 * @param unknown_type $sDate
 * @param unknown_type $month_
 * @param unknown_type $day_
 * @param unknown_type $year
 * @return unknown
 */
function _mktime($sDate,$month_ = 0, $day_ = 0, $year_ = 0)
{
	$year = substr($sDate, 0 , 4);
	$month = substr($sDate, 5, 2);
	$day = substr($sDate, 8, 2);
	$hour = substr($sDate, 11, 2);
	$minute = substr($sDate, 14, 2);
	$second = substr($sDate, 17, 2);
	return date("Y-m-d",mktime($hour, $minute, $second, $month + $month_, $day + $day_, $year + $year_));
}

/**
 * Enter description here...
 *
 */
function alertMsg($msg)
{
	echo "<script>alert('$msg');</script>";
}

function locationWin($sUrl)
{
	echo "<script>location.href='$sUrl';</script>";
	exit;
}


/**
 * �رմ���
 *
 */
function closeWin()
{
	echo "<script>window.close();</script>";
}

/**
 * Ȩ�޼��
 *
 * @param unknown_type $sFileName
 * @param unknown_type $sAction
 */
function checkExecPower($sFileName, $sAction)
{
	$bIsHavePower = manager::checkPower($_SESSION["xzx_roleID"], $sFileName, $sAction);
	if(!$bIsHavePower)
	{
		log::insertLog($_SESSION['xzx_roleID'], $sFileName, $sAction, "��Ȩִ���������", 2);
		redirect("home.php", 5, "����Ȩִ���������");
		exit();
	}
}

function checkCookie()
{
	if (!$_COOKIE['xzx_userName'])
	{
		redirect("member.php",5,"���¼��");
		exit;
	}
}

// ҳ������
function createHtm($sUploadPath,$sFileName,$id,$sTbl="")
{		
	$sUrl = __ADMIN_URL.$_SERVER['PHP_SELF']."?act=showPage&tbl=$sTbl&id=".$id;
	$sFilePath = $sUploadPath . "/". substr($sFileName,0,7);	
	if(!is_dir($sFilePath)) 
	{
		mkdir($sFilePath);
		chmod($sFilePath,0777);
	}
	
	$sContents = file_get_contents($sUrl);	
	//echo $sContents;
	@unlink($sUploadPath."/".$sFileName);
	
	$fp = fopen($sUploadPath."/".$sFileName,"w+");		
	if(fwrite($fp, $sContents))
		return true;
	else
		return false;
	fclose($fp);			
}

/**
 * ��ȡ���������ַ���
 *
 * @param string $str
 * @param int $lenth
 * @return string
 */

function str_sub($str,$lenth)
{
	$tem=$str;
	if(strlen($str)>$lenth)
	{
		$i=ord(substr($str,$lenth-1,1));
		if($i<=122)
			$tem=substr($str,0,$lenth);
		else
		{
			if(getstrsize($str,$lenth)%2==0)
				$tem=substr($str,0,$lenth);
			else
		    {
			    $tem=substr($str,0,$lenth-1);
			}
		}
		}
	return $tem;
}

function getstrsize($str,$len)
{
	$m=0;
	for($i=0;$i<$len;$i++)
	{
		$j=ord(substr($str,$i,1));
		if(!($j<=122))
			$m++;
	}
	return $m;
}

// �ַ�����




?>