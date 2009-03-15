<?php
/**
 * 加载库文件
 *
 * @param string $sLibName
 */
function loadLib($sLibName) {
	$sLibFullName = $sLibName.".lib.php";
	//echo ROOT;
	require_once(ROOT."./class/".$sLibFullName);
}


/**
 * 前台分页程序(伪静态分页)
 *
 * @param string $sPage  	- 显示的页面
 * @param int $iTotalNum	- 总数
 * @param int $iPerpage		- 每页显示数量
 * @param int $iPageNo		- 当前页号
 * @param string $sExt		- 其他参数
 */
function dividePage_1($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt,$bIsDiv=1)
{
	global $tpl;
	//开始显示的数目
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//共有多少页
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;	
	
	$sStr = " <div class=\"mainipselc\">";
		
	$sStr .= "第<span class=\"colorsb\">{$iPageNo}</span>页</span>  <span class=\"colorsc\">共<span class=\"colorsb\">{$iTotalPage}</span>页 ";	
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//当前页数是1，第一页没有链接    	
    	$sStr .= "最前页 ";
    	
    } else {
    	//当前页数不是1，第一页有链接
    	//$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>最前页</a> ";
    	$sStr .= "<a href='{$sPage}_1.html'>最前页</a> ";
    }
    //判断上一页
    if($iPrev < 1) {
    	//没有上一页
    	$sStr .= "  上一页 ";
    } else {
    	//有上一页
    	//$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>上一页</a> ";
    	$sStr .= "<a href='{$sPage}_{$iPrev}.html'>上一页</a> ";
    }
    //判断下一页
    if ($iNext > $iTotalPage) {
    	//没有下一页了
        $sStr .= "下一页 ";
    } else {
    	//还有下一页
    	//$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>下一页</a> ";
    	$sStr .= "<a href='{$sPage}_{$iNext}.html'>下一页</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "最末页";
    } else {
    	$sStr .= "<a href='{$sPage}_{$iTotalPage}.html'>最末页</a> ";
    }
    $sStr .= "</div>";
       
	$tpl->assign("Divide_Page", $sStr);
}

/**
 * 前台分页程序(正常分页)
 *
 * @param string $sPage  	- 显示的页面
 * @param int $iTotalNum	- 总数
 * @param int $iPerpage		- 每页显示数量
 * @param int $iPageNo		- 当前页号
 * @param string $sExt		- 其他参数
 */


function dividePage_2($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt,$bIsDiv=1)
{
	global $tpl;
	//开始显示的数目
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//共有多少页
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;	
	
	$sStr = ($bIsDiv ==1) ? " <div class=\"mainipselc\">" : "";
		
	$sStr .= "第<span class=\"colorsb\">{$iPageNo}</span>页</span>  <span class=\"colorsc\">共<span class=\"colorsb\">{$iTotalPage}</span>页 ";	
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//当前页数是1，第一页没有链接    	
    	$sStr .= "最前页 ";
    	
    } else {
    	//当前页数不是1，第一页有链接
    	$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>最前页</a> ";
    }
    //判断上一页
    if($iPrev < 1) {
    	//没有上一页
    	$sStr .= "  上一页 ";
    } else {
    	//有上一页
    	$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>上一页</a> ";
    }
    //判断下一页
    if ($iNext > $iTotalPage) {
    	//没有下一页了
        $sStr .= "下一页 ";
    } else {
    	//还有下一页
    	$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>下一页</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "最末页";
    } else {
    	$sStr .= "<a href='{$sPage}?pageNo={$iTotalPage}&{$sExt}'>最末页</a> ";
    }
    $sStr .=($bIsDiv ==1) ? "</div>" : "";
       
	$tpl->assign("Divide_Page", $sStr);
}


/**
 * 分页程序
 *
 * @param string $sPage  	- 显示的页面
 * @param int $iTotalNum	- 总数
 * @param int $iPerpage		- 每页显示数量
 * @param int $iPageNo		- 当前页号
 * @param string $sExt		- 其他参数
 */
function dividePage($sPage,$iTotalNum,$iPerpage,$iPageNo,$sExt)
{
	global $tpl;
	//开始显示的数目
	$iPageStart = ($iPageNo - 1) * $iPerpage + 1;
	//共有多少页
	$iTotalPage = ceil($iTotalNum / $iPerpage);
	if($iPageNo < $iTotalPage)
		$iEndPage = $iPageStart + $iPerpage - 1;
	else 
		$iEndPage = $iTotalNum;
	
	$sStr = " <table width='100%' border='1' cellspacing='0' cellpadding='0' align='center' bordercolordark='#FFFFFF' bordercolorlight='#000000'  bgcolor='#efefef'><tr align=center><td>●";
	$sStr .= "共".$iTotalNum."条记录,每页显示{$iPerpage}条，列出第".$iPageStart;
	$sStr .= "到第";
	$sStr .= $iEndPage;
	$sStr .= "条 ";
	$sStr .= "</td>  <td> <div align='center'>";
	$iPrev = $iPageNo - 1;
	$iNext = $iPageNo + 1;
	
	if($iPageNo == 1) {	
		//当前页数是1，第一页没有链接
    	$sStr .= "第一页";
    } else {
    	//当前页数不是1，第一页有链接
    	$sStr .= "<a href='{$sPage}?pageNo=1&{$sExt}'>第一页</a> ";
    }
    //判断上一页
    if($iPrev < 1) {
    	//没有上一页
    	$sStr .= "  上一页 ";
    } else {
    	//有上一页
    	$sStr .= "<a href='{$sPage}?pageNo={$iPrev}&{$sExt}'>上一页</a> ";
    }
    //判断下一页
    if ($iNext > $iTotalPage) {
    	//没有下一页了
        $sStr .= "下一页 ";
    } else {
    	//还有下一页
    	$sStr .= "<a href='{$sPage}?pageNo={$iNext}&{$sExt}'>下一页</a> ";
    }
    if ($iPageNo >= $iTotalPage) {
        $sStr .= "最后一页";
    } else {
    	$sStr .= "<a href='{$sPage}?pageNo={$iTotalPage}&{$sExt}'>最后一页</a> ";
    }
    $sStr .= "</div> </td> <td width='15%'> ";
    $sStr .= "第".$iPageNo."/".$iTotalPage."页 ";
    $sStr .=  "</td> <form name=form1 method=post action={$sPage}?{$sExt}><td width='15%' align=center><input name=pageNo type=text class='form_text' size=2  value=$iPageNo> <input type=submit name=Submit2 value=go class='button'></td> </form></tr></table>";
	$tpl->assign("Divide_Page", $sStr);
}


/**
 * 跳转页面
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


/** 错误后跳转 **/
function redirect_error($sMsg)
{
	echo "<script>alert('$sMsg');history.go(-1);</script>";
	//exit;
}

/**
 * 出错页面
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

//取IP
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
 * 数组转换成集合
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
 * 数组转换成集合
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
 * 数组中的一维作为key，一维作为value
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
 * 取得后几天的日期函数  
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
 * 关闭窗口
 *
 */
function closeWin()
{
	echo "<script>window.close();</script>";
}

/**
 * 权限检查
 *
 * @param unknown_type $sFileName
 * @param unknown_type $sAction
 */
function checkExecPower($sFileName, $sAction)
{
	$bIsHavePower = manager::checkPower($_SESSION["xzx_roleID"], $sFileName, $sAction);
	if(!$bIsHavePower)
	{
		log::insertLog($_SESSION['xzx_roleID'], $sFileName, $sAction, "无权执行这个功能", 2);
		redirect("home.php", 5, "你无权执行这个功能");
		exit();
	}
}

function checkCookie()
{
	if (!$_COOKIE['xzx_userName'])
	{
		redirect("member.php",5,"请登录！");
		exit;
	}
}

// 页面生成
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
 * 获取定长的子字符串
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

// 字符过滤




?>