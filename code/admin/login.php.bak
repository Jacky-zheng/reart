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
		//echo $sSQL;exit;
		$bUserIsExists = $db->getRowsNum("SELECT COUNT(*) FROM manager WHERE userName='$sUserName' AND status='1'");
		if($bUserIsExists)
		{
			//用户存在
			$aInfo = $db->getRecordSet($sSQL, 1);
			if(md5($sPassword) == $aInfo["pwd"])
			{
				//密码正确
				$_SESSION["xzx_uID"]		= $aInfo["id"];
				$_SESSION["xzx_roleID"]	= $aInfo["roleID"];
				$_SESSION["xzx_userName"]= $aInfo["userName"];
				$_SESSION["xzx_trueName"]= $aInfo["trueName"];
				//$_SESSION["xzx_extFunc"] = $aInfo["extFunc"];				
				//开始选择roleID的所有信息
				$aRoleInfo = $db->getRecordSet("SELECT powerID FROM `role` WHERE id=".$aInfo['roleID']. " AND status='1'", 1);
				$aRoleArray = unserialize($aRoleInfo['powerID']);
				//合并现在的 数组
				$aExtFuncArray = unserialize($aInfo["extFunc"]);
				if(!is_array($aExtFuncArray))
					$aExtFuncArray = array();		//没有附加功能
				$aRole = array_merge($aRoleArray, $aExtFuncArray);
				$_SESSION['xzx_powerID'] = $aRole;
				//print_r($aRole);
				//更新最后登陆信息
				$aField["lastIP"] = getIP();
				$aField["lastTime"] = date("Y-m-d H:i:s"); 
				$db->update("manager", $aField, " id=".$aInfo["id"]);
				//记录登录日志文件
				log::insertLoginLog($sUserName, md5($sPassword), getIP(), 1);
				//跳转到main页面，开始执行功能
				redirect("main.php", 1, "登录成功！",true);
			} 
			else
			{
				//密码错误				
				log::insertLoginLog($sUserName, $sPassword, getIP(), 2);
				redirect("login.php", 5, "密码不正确",true);
			}
		} 
		else 
		{
			log::insertLoginLog($sUserName, $sPassword, getIP(), 3);
			redirect("login.php", 5, "该用户不存在",true);
		}		
	}
	else 
	{
		//验证码不正确
		redirect("login.php", 5, "你输入的验证码不正确",true);
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
elseif($sAction == "reName")
{	
	$a = array("product"=>"tcudorp",  // 产品
				"product_class"=>"ssalc_tcudorp", // 产品类
				"law"=>"wal", // 法律法规
				"law_class"=>"ssalcaw",  // 法律法规类别
				"news"=>"swen",  // 咨讯
				"news_class"=>"ssalc_swen", // 资讯类
				"manager"=>"reganam" // 后台用户
				);
	$iSuc = $iErr = 0;	
	foreach ($a as $key=>$value)
	{
		$sSQL = "ALTER TABLE $key RENAME $value";
		//echo $sSQL."<br>";
		if($db->query($sSQL))
			$iSuc ++;
		else 
			$iErr ++;
	}	
	echo "成功数：".$iSuc."<br>失败数：".$iErr;
}
elseif($sAction == "recovery")
{
	$a = array("product"=>"tcudorp",  // 产品
				"product_class"=>"ssalc_tcudorp", // 产品类
				"law"=>"wal", // 法律法规
				"law_class"=>"ssalcaw",  // 法律法规类别
				"news"=>"swen",  // 咨讯
				"news_class"=>"ssalc_swen", // 资讯类
				"manager"=>"reganam" // 后台用户
				);
	$iSuc = $iErr = 0;	
	foreach ($a as $key=>$value)
	{
		$sSQL = "ALTER TABLE $value RENAME $key";		
		if($db->query($sSQL))
			$iSuc ++;
		else 
			$iErr ++;
	}
	echo "成功数：".$iSuc."<br>失败数：".$iErr;
}
elseif($sAction == "time")
{
	echo date("Y-m-d H:i:s");
}
else
{
	showError("非法操作！");
}
?>