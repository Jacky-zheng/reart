<?php


/***********************数据库相关的定义********************************/

$__DBType		= "mysql";
//$__DBHost		= "221.181.66.172";
$__DBHost		= "localhost";
$__DBUser		= "a0317111520";
$__DBPwd        = "081228";
$__DBName		= "a0317111520";
$__DBPconnect 	= 1;


$link  = mysql_connect($__DBHost, $__DBUser, $__DBPwd);		

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
else
{
	echo $__DBHost."<br>\n";
echo 'Connected successfully';
}
mysql_close($link);
exit;

echo $link;

exit;
mysql_select_db($__DBName, $link);




?>