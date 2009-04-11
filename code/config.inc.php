<?php
if(!defined("IN_CN315")){
	echo "<script>location.href='/';</script>";
}
/***********************数据库相关的定义********************************/

$__DBType		= "mysql";
$__DBHost		= "221.181.66.172";
$__DBUser		= "a0317111520";
$__DBPwd        = "081228";
$__DBName		= "a0317111520";
$__DBPconnect 	= 1;

/************************系统配置相关的定义******************************/
define("__ADMINTITLE", "后台管理");				//显示的标准头
define("__TECH_MAIL", "chenlqin@126.com");				//技术email，系统出错可以发送邮件
define("__DEFAULT_TEMPLATE", "");			//默认的模版文件
define("__ADMIN_URL", "/");	//后台域名
define("__URL","/"); // 网站域名
define("__WEBNAME","睿艺");

/** 图片路径 **/
define("__NEWS_PIC","../newsPic/"); // 资讯图片
define("__NEWS_ATTACHED","../attached/"); // 资讯附件
define("__MEMBER_PIC","../memberPic/");// 会员图片
define("__USER_PIC","../userPic/");	//后台编辑用户相片


/** 文件页面路径 **/
define("__NEWS_HTM","../newsHtm/"); // 资讯页面
define("__PRODUCT_HTM","../productHtm/"); // 产品页面

define("TIME_INTERVAL",60*60*12);		//cookie时间间隔  （12 hour）
?>