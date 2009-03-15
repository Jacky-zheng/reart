<?php
//error_reporting(0);
header("Content-type:text/html;charset=gb2312");
session_start();
define("OPEN_DEBUG",false);					//是否开启调试开关



if(OPEN_DEBUG)
{
	echo "cn315 DEBUG System:<br />";	
	error_reporting(E_ALL);
}

define("IN_CN315",true);		//对文件的访问安全作个限制

if(!IN_CN315) 
{
	echo "<script>location.href='/';</script>";
}

define("ROOT",substr(dirname(__FILE__), 0, -5));	//文件的主目录
define("CACHE_FILE", "cache");		//缓存文件
define("I_PERPAGE", 15);		//默认的每页显示数字

//echo ROOT;

require_once(ROOT.'./config.inc.php');
require_once(ROOT.'./class/functions.inc.php');
loadLib("Database");
loadLib("template");
loadLib("manager");

//连接数据库
$db = new Database($__DBHost, $__DBName, $__DBUser, $__DBPwd,OPEN_DEBUG);
$db->connect();


$tpl = new template(__DEFAULT_TEMPLATE);  // 模板设置

$aWaterText = array('www.cn315.cc all rights reserved', 'all rights reserved'); //$定义加水印的文字

$aPicSize = array('maxWidth' => 500, 'maxHeight' => 500);  //定义生成后的大小

$aThumbSize = array('width' => 200, 'height' => 200);  //定义缩略图的大小

$aENUM = array(1=>"是",0=>"否");	

$aSex = array(0=>"男",1=>"女"); // 性别
		   

/** 企业会员属性设置  2007-06-22  **/

$aQuestion = array(0 => "请选择任一问题",
				   1 => "你在哪所中学读初中？",
				   2 => "你的宠物叫什么名字？",
				   3 => "你最喜欢的歌曲是？",
				   4 => "你最喜欢的球员名字？",
				   5 => "你最喜欢的书是？",
				   6 => "你爱人的生日？",
				   7 => "你的出生年月是？",
				   8 => "你爱人的名字是？",
				   9 => "你爷爷的名字是？",
				   10 => "你好友或同学名字是？");   // 密码提示问题	

$aCompanyType = array(0 => "不方便公开",
					  1 => "生产型",
					  2 => "贸易型",
					  3 => "服务型",
					  4 => "政府或其它机构");  // 企业类型

$aCompanyNation = array(0 => "不方便公开",
						1 => "私营企业",
						2 => "民营企业",
						3 => "个体经济",
						4 => "事业单位",
						5 => "有限责任公司",
						6 => "股份合作公司",
						7 => "中外合资企业",
						8 => "外资独资企业",
						9 => "集团股份公司",
					    10 => "非盈利性机构",
					    11 => "社会团体",
					    12 => "政府机关",
					    13 => "国有企业");   // 企业性质

$aCompanyPersons = array(0 => "1-50",
						 1 => "50-100",
						 2 => "100-300",
						 3 => "300-500",
						 4 => "500-1000",
						 5 => "1000-5000",
						 6 => "5000以上");  // 公司职业人数
						 
$aMoneyUnit = array(0 => "人民币",
					1 => "美金",
					2 => "日元",
					3 => "英镑",
					4 => "港币",
					5 => "欧元",
					6 => "新币",
					7 => "卢布",
					8 => "台币"); // 货币单位	
					
/** 招聘对象 **/

$aZhaopinObject = array(0=>"全职",
						1=>"兼职",
						2=>"应届生");
						
/** 投诉方式 **/
 $aWay = array("留言投诉","视频投诉","QQ投诉","电话投诉");


//教育程度
$aEducation = array(0=>"小学",1=>"初中",2=>"高中",3=>"中专",4=>"大专",5=>"本科",6=>"硕士",7=>"博士",8=>"博士后");

//个人注册的年龄段。
$aAge = array(0=>"18岁以下",1=>"18-44岁",2=>"45-59岁",3=>"60-74岁");

/** 票务/宾馆 **/
//房间类型(几人间)
$aRoomType = array(0=>"1人间",1=>"2人间",2=>"3人间",3=>"4人间",4=>"5人间",5=>"6人间");

//机票舱位
$aBunk = array(0=>"最低经济舱",1=>"全价经济舱",2=>"商务舱",3=>"头等舱");
?>