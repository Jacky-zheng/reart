<?php
/**
 * area.php(����ѡ��ģ��)
 * @author xiongzhixin (xzx747@sohu.com) 2007-07-03
 */
//define("OPEN_DEBUG",true);					//�Ƿ������Կ���
$sAction = (isset($_GET["act"])) ? $_GET["act"] : "listAll";
require_once("../class/common.inc.php");
loadLib("area");

if ($sAction == "searchCountry" && isset($_GET['countryID'])) 
{
	$iCountryID = $_GET['countryID'];
	$aInfo = area::getAreaArr($iCountryID);	
	//print_r($aInfo);
	
	if($aInfo)
	{
		echo "<select name='provinceID'  onchange='searchCity();'>";
		echo "<option value=''>ȫ��</option>";
		foreach ($aInfo as $iKey => $sValue)
		{
			echo "<option value=$iKey>$sValue</option>";
		}
		echo "</select>";
	}
	else 
	{
		//echo $iCountryID;
	}
}
elseif ($sAction == "searchCity" && isset($_GET['provinceID'])) 
{
	$iProvinceID = $_GET['provinceID'];
	$aInfo = area::getAreaArr($iProvinceID);	
	//print_r($aInfo);
	echo "<select name='cityID' onchange='searchCounty();'>";
	echo "<option value=''>ȫ��</option>";
	foreach ($aInfo as $iKey => $sValue)
	{
		echo "<option value=$iKey>$sValue</option>";
	}
	echo "</select>";
}
elseif ($sAction == "searchCounty" && isset($_GET['cityID']))
{
	$iCityID = $_GET['cityID'];
	$aInfo = area::getAreaArr($iCityID);
	//print_r($aInfo);
	echo "<select name='countyID'>";
	echo "<option value=''>ȫ��</option>";
	foreach ($aInfo as $iKey => $sValue)
	{
		echo "<option value=$iKey>$sValue</option>";
	}
	echo "</select>";	
}


?>