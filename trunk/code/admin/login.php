<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "login";

if($sAction == "login")
{
	//��ʾ��¼����
	$tpl->display("admin/login.tpl.htm");	
}
elseif($sAction == "doLogin") 
{
	//ִ�е�¼����
	$sUserName = $_POST["userName"];
	$sPassword = $_POST["password"];
	$sCheckCode = $_POST['validateCode'];
	
	//�����֤���Ƿ���ȷ
	if($sCheckCode == $_SESSION["xzx_checkCode"]) 
	{
		//����֤����ȷ������£���ʼ��¼��¼����	
		$sSQL = "SELECT * FROM manager WHERE userName='$sUserName' AND status='1'";
		$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM manager WHERE userName='$sUserName' AND status='1'");
		if($bUserIsExists)
		{
			//�û�����
			$aInfo = $db->getRecordSet($sSQL, 1);
			if(md5($sPassword) == $aInfo["pwd"])
			{
				//������ȷ
				$_SESSION["xzx_uID"]		= $aInfo["id"];
				$_SESSION["xzx_userName"]= $aInfo["userName"];
				$_SESSION["xzx_trueName"]= $aInfo["trueName"];
	
				//��������½��Ϣ
				$aField["lastIP"] = getIP();
				$aField["lastTime"] = date("Y-m-d H:i:s"); 
				$db->update("manager", $aField, " id=".$aInfo["id"]);
				//��ת��mainҳ�棬��ʼִ�й���
				redirect("main.php", 1, "��¼�ɹ���",true);
			} 
			else
			{
				redirect("login.php", 2, "���벻��ȷ",true);
			}
		} 
		else 
		{
			redirect("login.php", 2, "���û�������",true);
		}		
	}
	else 
	{
		//��֤�벻��ȷ
		redirect("login.php", 2, "���������֤�벻��ȷ",true);
	}
	//��ʼ��¼���ĵ�¼��������¼�����Ժ��Զ��������ʺ�	
} 
elseif ($sAction == "logout")
{
	$aField["logoutTime"] = date("Y-m-d H:i:s");
	$db->update("log_login",$aField,"id=".$_GET["logID"]);
	session_destroy();
	//�����ݿ���в�������¼�˳�ʱ��
	redirect("login.php", 1, "�ɹ��˳�ϵͳ",true);
}
else
{
	showError("�Ƿ�������");
}
?>