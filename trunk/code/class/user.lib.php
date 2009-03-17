<?php
/**
 * 检测用户名是否已经存在
 * @param string $aField
 * @return true or false
 */
function checkNameRepeat( $aField )
{
	$sSQL = "SELECT count(*) as num FROM member WHERE userName ='".$aField."'";
	$sQUE = mysql_query($sSQL);
	if ($sQUE["num"] == 0 ) return true;
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
	global $db;
	$sSQL = "SELECT * FROM member WHERE userName='".$arr["userName"]."'";
	$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM member WHERE userName='".$arr["userName"]."'");
	if($bUserIsExists)
	{
		//用户存在
		$aInfo = $db->getRecordSet($sSQL, 1);
		if(md5($arr["password"]) == $aInfo["pwd"])
		{
			//密码正确
			$_SESSION["reart_id"]	 = $aInfo["id"];
			$_SESSION["reart_uname"] = $aInfo["userName"];

			//更新最后登陆信息
			$aField["loginIp"] = getIP();
			$aField["loginDate"] = date("Y-m-d H:i:s");
			$db->update("manager", $aField, " id=".$aInfo["id"]);
			//跳转到main页面，开始执行功能
			gotoPage("/user/");
		}
		else
		{
			redirect_error("密码错误！");
		}
	}
	else
	{
		redirect_error("该用户不存在！");
	}
}

function checkRegister($aField)
{
	global $db;
	$insertid = insert("member", $aField);
	if(!empty($insertid))
	{
		gotoPage("/user/");
	}
	else
	{
		redirect_error("注册失败！");
	}
}
/**
 * 生成指定字符个数随机字符串,基于md5()，字符长度不超过32位
 *
 * @param integer $num
 * @return string
 */
function randstr( $lenth )
{
	mt_srand( ( double )microtime() * 1000000 );
	for( $i = 0;$i < $lenth;$i++ )
	{
		$randval .= mt_rand( 0, 9 );
	}
	$randval = substr( md5( $randval ), mt_rand( 0, 32 - $lenth ), $lenth );
	return $randval;
}
// page jump
function gotoPage( $url )
{
	echo "<script type=\"text/javascript\">window.location.href='" . $url . "';</script>";
	exit();
}
?>