<?php
/**
 * 检测用户名是否已经存在
 * @param string $aField
 * @return true or false
 */
function checkNameRepeat( $aField )
{
	global $db;
	$sSQL = "SELECT count(*) FROM member WHERE userName ='".$aField."'";
	$sQUE = $db->getRowsNum($sSQL);
	if ($sQUE == 0 ) return true;
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

			//更新最后登陆信息
			$arr = array(
				'userID' =>  $aInfo["id"],	
				'loginDate' =>  date("Y-m-d H:i:s"),	
				'loginIP' =>  getIP(),		
			);
			$db->insert("loginlog", $arr);
			$arr_login = array(
				'userID' =>  $aInfo["id"],	
				'loginDate' => date("Y-m-d H:i:s"),
				'loginIP' =>  getIP(),		
			);
			$db->insert("member", $arr_login);
			//跳转到main页面，开始执行功能
			gotoPage("/user/login_index.php");
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
//用户注册
function checkRegister($aField)
{
	global $db;
	$insertid = $db->insert("member", $aField);
	if(!empty($insertid))
	{
		$_SESSION["reart_id"]	 = $insertid;
		$arr = array(
			'userID' =>  $insertid,	
			'loginDate' =>  date("Y-m-d H:i:s"),	
			'loginIP' =>  getIP(),		
		);
		$db->insert("loginlog", $arr);
		gotoPage("/user/login_index.php");
	}
	else
	{
		redirect_error("注册失败！");
	}
}
function checkUserState($id)
{
	if (!empty($id))
	{
		$data = getUserInfo($id);
		$check_login = '您好, '.$data["userName"].", <a href='/user/login_out.php'>退出</a>";
	}
	else 
	{
		$check_login = '<a href="/user/login.php">会员登陆／注册</a>';
	}
	return $check_login;
}
function loginOut($id)
{
	global $db;
	$arr = array(
		'userID' =>  $id,	
		'logoutDate' =>  date("Y-m-d H:i:s"),	
		'loginIP' =>  getIP(),		
	);
	$db->insert("loginlog", $arr);
}
//获取用户信息
function getUserInfo($user_id)
{
	global $db;
	$sSQL = "SELECT * FROM member WHERE id = '".$user_id."'";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
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