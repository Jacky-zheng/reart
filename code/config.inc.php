<?php
if(!defined("IN_CN315")){
	echo "<script>location.href='/';</script>";
}
/***********************���ݿ���صĶ���********************************/

$__DBType		= "mysql";
$__DBHost		= "localhost";
$__DBUser		= "root";
$__DBPwd        = "";
$__DBName		= "ruiyi";
$__DBPconnect 	= 1;

/************************ϵͳ������صĶ���******************************/
define("__ADMINTITLE", "��̨����");				//��ʾ�ı�׼ͷ
define("__TECH_MAIL", "chenlqin@126.com");				//����email��ϵͳ������Է����ʼ�
define("__DEFAULT_TEMPLATE", "");			//Ĭ�ϵ�ģ���ļ�
define("__ADMIN_URL", "/");	//��̨����
define("__URL","/"); // ��վ����
define("__WEBNAME","���");

/** ͼƬ·�� **/
define("__NEWS_PIC","../newsPic/"); // ��ѶͼƬ
define("__NEWS_ATTACHED","../attached/"); // ��Ѷ����
define("__MEMBER_PIC","../memberPic/");// ��ԱͼƬ
define("__USER_PIC","../userPic/");	//��̨�༭�û���Ƭ


/** �ļ�ҳ��·�� **/
define("__NEWS_HTM","../newsHtm/"); // ��Ѷҳ��
define("__PRODUCT_HTM","../productHtm/"); // ��Ʒҳ��

define("TIME_INTERVAL",60*60*12);		//cookieʱ����  ��12 hour��
?>