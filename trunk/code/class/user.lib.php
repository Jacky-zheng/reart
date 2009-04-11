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
 * 检测登录
 * @param $arr array
 * @return true or false
 *
 */
function checkUserLogin($arr)
{
	global $db;
	$sSQL = "SELECT * FROM member WHERE userName='".$arr["userName"]."'";
	$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM member WHERE userName='".$arr["userName"]."' AND pwd='".md5($arr["password"])."'");
	if($bUserIsExists)
	{
		//用户存在
		$aInfo = $db->getRecordSet($sSQL, 1);
		//密码正确
		$_SESSION["reart_id"]	 = $aInfo["id"];
		//更新最后登录信息
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
		return true;
	}
	else
	{
		return false;
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
function checkUserState($id,$type)
{
	if ("ch" == $type)
	{
		if (!empty($id))
		{
			$data = getUserInfo($id);
			$check_login = '您好, <a href="/user/login_index.php">'.$data["userName"]."</a>, <a href='/user/login_out.php'>退出</a>";
		}
		else 
		{
			$check_login = '<a href="/user/login.php">会员登录／注册</a>';
		}
	}
	else 
	{
		if (!empty($id))
		{
			$data = getUserInfo($id);
			$check_login = 'Welcome, <a href="/user/login_index.php?language=en">'.$data["userName"]."</a>, <a href='/user/login_out.php?language=en'>Logout</a>";
		}
		else 
		{
			$check_login = '<a href="/user/login.php?language=en">Login/Register</a>';
		}
	}
	return $check_login;
}
function checkMessage($id,$type)
{
	if ('en' == $type)
	{
		if (!empty($id))
		{
			$data = getUserInfo($id);
			$check_login = '<td width="71">Welcome,</td><td width="524">'.$data["userName"].'</td>';
		}
		else 
		{
			$check_login = '<form action="/user/contact_us.php?language=en" method="POST" name="login"><td width="90">Anonymous<input class="box" checked type="checkbox" name="no_reg" /></td><td width="515">Username:&nbsp;&nbsp;<input class="width-03" type="text" name="login_name"/>&nbsp;&nbsp;password:&nbsp;&nbsp;<input class="width-03" type="password" name="login_pwd" />&nbsp;&nbsp;<button type="submit">Login</button></td></form>';
		}
	}
	else 
	{
		if (!empty($id))
		{
			$data = getUserInfo($id);
			$check_login = '<td width="71">您好,</td><td width="524">'.$data["userName"].'</td>';
		}
		else 
		{
			$check_login = '<form action="/user/contact_us.php" method="POST" name="login"><td width="94">匿名<input class="box" type="checkbox" checked name="no_reg"  /></td><td width="542">用户名:&nbsp;&nbsp;<input class="width-03" type="text" name="login_name"/>&nbsp;&nbsp;密码:&nbsp;&nbsp;<input class="width-03" type="text" type="password" name="login_pwd"/>&nbsp;&nbsp;<button type="submit">登录</button></td></form>';
		}
	}
	return $check_login;
}
//建议
function insertMsg($arr)
{
	global $db;
	$msg = $db->insert("guestbook", $arr);
	return $msg;
}
//关于睿艺
function getAboutUs()
{
	global $db;
	$sSQL = "SELECT content,title,etitle,econtent FROM content WHERE id=1  ";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
}
//
//投资收藏咨询
function getConsultation()
{
	global $db;
	$sSQL = "SELECT content,title FROM content WHERE id=2  ";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
}
//退出
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