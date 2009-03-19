<?php
//define("OPEN_DEBUG",true);
require_once("../class/common.inc.php");
$sAction = isset($_GET["act"]) ? $_GET["act"] : "login";

if($sAction == "login")
{
	//显示登录界面
	$tpl->display("admin/login.tpl.htm");	
}
elseif($sAction == "doLogin") 
{
	//执行登录操作
	$sUserName = $_POST["userName"];
	$sPassword = $_POST["password"];
	$sCheckCode = $_POST['validateCode'];
	
	//检查验证码是否正确
	if($sCheckCode == $_SESSION["xzx_checkCode"]) 
	{
		//在验证码正确的情况下，开始记录登录次数	
		$sSQL = "SELECT * FROM manager WHERE userName='$sUserName' AND status='1'";
		$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM manager WHERE userName='$sUserName' AND status='1'");
		if($bUserIsExists)
		{
			//用户存在
			$aInfo = $db->getRecordSet($sSQL, 1);
			if(md5($sPassword) == $aInfo["pwd"])
			{
				//密码正确
				$_SESSION["xzx_uID"]		= $aInfo["id"];
				$_SESSION["xzx_userName"]= $aInfo["userName"];
				$_SESSION["xzx_trueName"]= $aInfo["trueName"];
	
				//更新最后登陆信息
				$aField["lastIP"] = getIP();
				$aField["lastTime"] = date("Y-m-d H:i:s"); 
				$db->update("manager", $aField, " id=".$aInfo["id"]);
				//跳转到main页面，开始执行功能
				redirect("main.php", 1, "登录成功！",true);
			} 
			else
			{
				redirect("login.php", 2, "密码不正确",true);
			}
		} 
		else 
		{
			redirect("login.php", 2, "该用户不存在",true);
		}		
	}
	else 
	{
		//验证码不正确
		redirect("login.php", 2, "你输入的验证码不正确",true);
	}
	//开始记录他的登录次数，登录三次以后自动锁定该帐号	
} 
elseif ($sAction == "logout")
{
	$aField["logoutTime"] = date("Y-m-d H:i:s");
	$db->update("log_login",$aField,"id=".$_GET["logID"]);
	session_destroy();
	//对数据库进行操作，记录退出时间
	redirect("login.php", 1, "成功退出系统",true);
}
else
{
	showError("非法操作！");
}
?>