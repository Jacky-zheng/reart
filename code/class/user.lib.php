<?php
/**
 * ����û����Ƿ��Ѿ�����
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
	$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM member WHERE userName='".$arr["userName"]."'");
	if($bUserIsExists)
	{
		//�û�����
		$aInfo = $db->getRecordSet($sSQL, 1);
		if(md5($arr["password"]) == $aInfo["pwd"])
		{
			//������ȷ
			$_SESSION["reart_id"]	 = $aInfo["id"];
			$_SESSION["reart_uname"] = $aInfo["userName"];

			//��������½��Ϣ
			$aField["loginIp"] = getIP();
			$aField["loginDate"] = date("Y-m-d H:i:s");
			$db->update("manager", $aField, " id=".$aInfo["id"]);
			//��ת��mainҳ�棬��ʼִ�й���
			gotoPage("/user/");
		}
		else
		{
			redirect_error("�������");
		}
	}
	else
	{
		redirect_error("���û������ڣ�");
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
		redirect_error("ע��ʧ�ܣ�");
	}
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