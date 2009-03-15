<?
session_start();

define("IN_CN315",true);		//���ļ��ķ��ʰ�ȫ��������
define("ROOT",substr(dirname(__FILE__), 0, -2));	//�ļ�����Ŀ¼

require_once(ROOT.'./class/functions.inc.php');

loadLib("rand");
$_SESSION["xzx_checkCode"] = rand::makeRand(0, 4);

//������֤��ͼƬ
Header("Content-type: image/PNG");
$im = @imagecreate( 12 * strlen($_SESSION["xzx_checkCode"]), 20);
imagefill($im,80,30,ImageColor($im,'#179AD2'));	//���ñ���ɫ

//����λ������֤�����ͼƬ,λ�ý���
for ($i = 0; $i < strlen($_SESSION["xzx_checkCode"]); $i++)
{
	($i%2 == 0) ? $top = 1:$top = 4;
	imagestring($im, 5, 10*$i+6, $top, substr($_SESSION["xzx_checkCode"],$i,1),ImageColor($im,'#ffff00'));
}

for($i=0;$i<150;$i++) //�����������
	imagesetpixel($im, rand()%90 , rand()%30 , ImageColor($im,'#CCCCCC'));
ImagePNG($im);
ImageDestroy($im);

function ImageColor($im,$color)
{
	preg_match_all("/([0-f]){2,2}/i",$color,$out);
	if(count($out[0])!=3)
		$out[0]=array_pad ($out[0],3,0);
		return ImageColorAllocate($im, hexdec($out[0][0]),hexdec($out[0][1]),hexdec($out[0][2]));
}
?>