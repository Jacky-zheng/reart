<?php
//error_reporting(0);
header("Content-type:text/html;charset=gb2312");
session_start();
define("OPEN_DEBUG",false);					//�Ƿ������Կ���



if(OPEN_DEBUG)
{
	echo "cn315 DEBUG System:<br />";	
	error_reporting(E_ALL);
}

define("IN_CN315",true);		//���ļ��ķ��ʰ�ȫ��������

if(!IN_CN315) 
{
	echo "<script>location.href='/';</script>";
}

define("ROOT",substr(dirname(__FILE__), 0, -5));	//�ļ�����Ŀ¼
define("CACHE_FILE", "cache");		//�����ļ�
define("I_PERPAGE", 15);		//Ĭ�ϵ�ÿҳ��ʾ����

//echo ROOT;

require_once(ROOT.'./config.inc.php');
require_once(ROOT.'./class/functions.inc.php');
loadLib("Database");
loadLib("template");
loadLib("manager");

//�������ݿ�
$db = new Database($__DBHost, $__DBName, $__DBUser, $__DBPwd,OPEN_DEBUG);
$db->connect();


$tpl = new template(__DEFAULT_TEMPLATE);  // ģ������

$aWaterText = array('www.cn315.cc all rights reserved', 'all rights reserved'); //$�����ˮӡ������

$aPicSize = array('maxWidth' => 500, 'maxHeight' => 500);  //�������ɺ�Ĵ�С

$aThumbSize = array('width' => 200, 'height' => 200);  //��������ͼ�Ĵ�С

$aENUM = array(1=>"��",0=>"��");	

$aSex = array(0=>"��",1=>"Ů"); // �Ա�
		   

/** ��ҵ��Ա��������  2007-06-22  **/

$aQuestion = array(0 => "��ѡ����һ����",
				   1 => "����������ѧ�����У�",
				   2 => "��ĳ����ʲô���֣�",
				   3 => "����ϲ���ĸ����ǣ�",
				   4 => "����ϲ������Ա���֣�",
				   5 => "����ϲ�������ǣ�",
				   6 => "�㰮�˵����գ�",
				   7 => "��ĳ��������ǣ�",
				   8 => "�㰮�˵������ǣ�",
				   9 => "��үү�������ǣ�",
				   10 => "����ѻ�ͬѧ�����ǣ�");   // ������ʾ����	

$aCompanyType = array(0 => "�����㹫��",
					  1 => "������",
					  2 => "ó����",
					  3 => "������",
					  4 => "��������������");  // ��ҵ����

$aCompanyNation = array(0 => "�����㹫��",
						1 => "˽Ӫ��ҵ",
						2 => "��Ӫ��ҵ",
						3 => "���徭��",
						4 => "��ҵ��λ",
						5 => "�������ι�˾",
						6 => "�ɷݺ�����˾",
						7 => "���������ҵ",
						8 => "���ʶ�����ҵ",
						9 => "���Źɷݹ�˾",
					    10 => "��ӯ���Ի���",
					    11 => "�������",
					    12 => "��������",
					    13 => "������ҵ");   // ��ҵ����

$aCompanyPersons = array(0 => "1-50",
						 1 => "50-100",
						 2 => "100-300",
						 3 => "300-500",
						 4 => "500-1000",
						 5 => "1000-5000",
						 6 => "5000����");  // ��˾ְҵ����
						 
$aMoneyUnit = array(0 => "�����",
					1 => "����",
					2 => "��Ԫ",
					3 => "Ӣ��",
					4 => "�۱�",
					5 => "ŷԪ",
					6 => "�±�",
					7 => "¬��",
					8 => "̨��"); // ���ҵ�λ	
					
/** ��Ƹ���� **/

$aZhaopinObject = array(0=>"ȫְ",
						1=>"��ְ",
						2=>"Ӧ����");
						
/** Ͷ�߷�ʽ **/
 $aWay = array("����Ͷ��","��ƵͶ��","QQͶ��","�绰Ͷ��");


//�����̶�
$aEducation = array(0=>"Сѧ",1=>"����",2=>"����",3=>"��ר",4=>"��ר",5=>"����",6=>"˶ʿ",7=>"��ʿ",8=>"��ʿ��");

//����ע�������Ρ�
$aAge = array(0=>"18������",1=>"18-44��",2=>"45-59��",3=>"60-74��");

/** Ʊ��/���� **/
//��������(���˼�)
$aRoomType = array(0=>"1�˼�",1=>"2�˼�",2=>"3�˼�",3=>"4�˼�",4=>"5�˼�",5=>"6�˼�");

//��Ʊ��λ
$aBunk = array(0=>"��;��ò�",1=>"ȫ�۾��ò�",2=>"�����",3=>"ͷ�Ȳ�");
?>