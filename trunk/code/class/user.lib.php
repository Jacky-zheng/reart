<?php
/**
 * ����û����Ƿ��Ѿ�����
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
 * ��������ʽ
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
 * ����½
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
		//�û�����
		$aInfo = $db->getRecordSet($sSQL, 1);
		//������ȷ
		$_SESSION["reart_id"]	 = $aInfo["id"];
		//��������½��Ϣ
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
//�û�ע��
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
		redirect_error("ע��ʧ�ܣ�");
	}
}
function checkUserState($id)
{
	if (!empty($id))
	{
		$data = getUserInfo($id);
		$check_login = '����, '.$data["userName"].", <a href='/user/login_out.php'>�˳�</a>";
	}
	else 
	{
		$check_login = '<a href="/user/login.php">��Ա��½��ע��</a>';
	}
	return $check_login;
}
function checkMessage($id)
{
	if (!empty($id))
	{
		$data = getUserInfo($id);
		$check_login = '<td width="71">����,</td><td width="524">'.$data["userName"].'</td>';
	}
	else 
	{
		$check_login = '<td width="71">����<input class="box" checked type="checkbox" name="no_reg" /></td><form action="/user/contact_us.php" method="POST" name="login"><td width="524">�û���:&nbsp;&nbsp;<input class="width-03" type="text" name="login_name"/>&nbsp;&nbsp;����:&nbsp;&nbsp;<input class="width-03" type="text" name="login_pwd" />&nbsp;&nbsp;<button type="submit">��½</button></form></td>';
	}
	return $check_login;
}
//����
function insertMsg($arr)
{
	global $db;
	$msg = $db->insert("guestbook", $arr);
	return $msg;
}
//�������
function getAboutUs()
{
	global $db;
	$sSQL = "SELECT content,title FROM content WHERE id=1  ";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
}
//
//Ͷ���ղ���ѯ
function getConsultation()
{
	global $db;
	$sSQL = "SELECT content,title FROM content WHERE id=2  ";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
}
//�˳�
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
//��ȡ�û���Ϣ
function getUserInfo($user_id)
{
	global $db;
	$sSQL = "SELECT * FROM member WHERE id = '".$user_id."'";
	$aField = $db->getRecordSet($sSQL,1);
	return $aField;
}

/**
 * ����ָ���ַ���������ַ���,����md5()���ַ����Ȳ�����32λ
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