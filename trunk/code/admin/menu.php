<?php
/**
 * ��̨��߲˵�ģ��
 *  2006.11
 */
//define("OPEN_DEBUG",true);
require_once("check_login.php");
require_once("../class/common.inc.php");

loadLib("menu");

$sAction = (isset($_GET["act"])) ? $_GET["act"] : "show";
//������Ҫ�ж�ֻ��root�ʺŲ��ܵ�½
// ��ǰλ��
$tpl->assign("PAGE_FUNC_BIG_NAME", "�������");
$tpl->assign("PAGE_FUNC_BIG_LINK", "menu.php?act=listAll");

$sTbl = "menu";

if($sAction == "show") // �˵���ʾ
{
	//Ҫѡȡ���д������sessionȨ���е�С��
	$sSQL = "SELECT * FROM $sTbl  ORDER BY orderID asc";
	$aList = $db->getRecordSet($sSQL); 
	$aBigAllList = array();
	$aSmallAllList = array();
	for ($i=0; $i<count($aList); $i++)
	{
		if($aList[$i]["pID"] == 0)
			$aBigAllList[] = $aList[$i];
		else 
			$aSmallAllList[] = $aList[$i];
	}
	//�Ѿ����ֳ������С����
	$k=0;
	for($i=0; $i<count($aBigAllList); $i++)
	{
		$bFlag = false;
		for($j=0; $j<count($aSmallAllList) && !$bFlag; $j++)
		{
			if($aBigAllList[$i]["id"] == $aSmallAllList[$j]["pID"])
				$bFlag = true;
		}
		if($bFlag)
		{
			$aBigNeedList[$k] = $aBigAllList[$i];
			$k++;
		}
	}
	//print_r($aBigNeedList);
	//print_r($aSmallAllList);
	
	$tpl->assign("isRootLogin", ($_SESSION['xzx_userName'] == 'admin') ? 1 : 0);
	$tpl->assign("aBigList",$aBigNeedList);
	$tpl->assign("iBigCatNum", count($aBigNeedList));
	$tpl->assign("aSmallAllList",$aSmallAllList);
	$tpl->display("admin/menu.tpl.htm");
}
elseif($sAction == "add") // �˵����
{	
	$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
	$tpl->assign("pid",$pid);
	
/*	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList(1);  //Ȩ��*/
	$aMenuList = menu::getMenuList(0);	
	$tpl->assign("aMenuList",$aMenuList);
	$tpl->assign("pid",$pid);
//	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME","�����߲˵�");
	$tpl->display("admin/menu_add.tpl.htm");		
}
elseif($sAction == "addSave")
{
	$aField['pID'] = $_POST['pID'];
	$aField['name'] = $_POST['name'];	
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($aField['pID'] > 0) //
	{
		$aField['url']  = $_POST['url'];
		$aField['powerID'] = $_POST['powerID'];
	}
	$id = $db->insert("menu",$aField);
	if($id > 0)
	{
		$aField['orderID'] = $id;
		$db->update($sTbl,$aField," id =$id");
		//redirect("menu.php?act=listAll",3,"��ӳɹ���");
		redirect("menu.php?act=add&pid=".$aField['pID'],1,"��ӳɹ���");
	}	
	else
	{
		redirect("menu.php?act=add",2,"���ʧ�ܣ�");
	}	
}
elseif($sAction == "edit" & isset($_GET['id'])) // �˵��޸�
{	
	$id = $_GET['id'];
/*	loadLib("power");
	$power = new power();
	$aPowerList = $power->getPowerList(1);  //Ȩ��*/
	$aMenuList = menu::getMenuList(0);
	
	$aInfo = $db->getRecordSet("SELECT * FROM $sTbl WHERE id = $id",1); 
		
	$tpl->assign("aMenuList",$aMenuList);
	$tpl->assign("aInfo",$aInfo);
//	$tpl->assign("aPowerList", $aPowerList);
	$tpl->assign("PAGE_FUNC_SMALL_NAME","�޸���߲˵�");
	$tpl->display("admin/menu_edit.tpl.htm");		
}
elseif($sAction == "editSave" && isset($_POST['id']))  // �˵��޸ı���
{
	$id = $_POST['id'];
	
	$aField['pID'] = $_POST['pID'];
	$aField['name'] = $_POST['name'];	
	$aField['addDate'] = date("Y-m-d H:i:s");
	if($aField['pID'] > 0) //
	{
		$aField['url']  = $_POST['url'];
		$aField['powerID'] = $_POST['powerID'];
	}
	
	if($db->update($sTbl,$aField,"id = $id"))		
	{
		//echo "ok";
		redirect("menu.php?act=listAll&pid=".$aField['pID'],3,"�޸ĳɹ���");	
		
	}	
	else
		redirect("menu.php?act=edit&id=$id",5,"�޸�ʧ�ܣ�");
}
elseif ( $sAction == "del" )
{
	$id = $_GET['id'];
	if($db->query("delete FROM $sTbl WHERE id=$id or PID=$id "))
	{
		redirect("menu.php?act=listAll",2,"ɾ���ɹ���");
	}
	else 
	{
		redirect("menu.php?act=listAll",2,"ɾ��ʧ�ܣ�");
	}
	
}
elseif($sAction == "listAll") // ��߲˵��б�
{
	$pid = (isset($_GET['pid']))? $_GET['pid'] : 0;
	$aList = menu::getMenuList($pid);
	for($i=0; $i<count($aList); $i++)		
	{
		$id = $aList[$i]['id'];
		if($pid == 0 || $pid == $id) 
  			$aList[$i]['name'] = "<a href='menu.php?act=listAll&pid=$id'><font color=red><b>".$aList[$i]['name']."</b></font></a>";
  		else 
  			$aList[$i]['name'] = "&nbsp;&nbsp;&raquo;&nbsp;".$aList[$i]['name'];
	}	
	
	$tpl->assign("PAGE_FUNC_SMALL_NAME", "��߲˵��б�");
	$tpl->assign("aList",$aList);
	$tpl->assign("pid",$pid);
	$tpl->display("admin/menu_list.tpl.htm");
}
elseif($sAction == "changeOrder" && $_POST['orderID']) // ��������
{
	$pid = (isset($_GET['pid'])) ? $_GET['pid'] : 0;
	$aOrderID = $_POST['orderID'];
	$aID 	  = $_POST['id'];
	//print_r($aOrderID);
	for($i=0; $i<count($aOrderID); $i++)
	{
		$aField['orderID'] = $aOrderID[$i];
		$db->update($sTbl,$aField,"id=".$aID[$i]);
	}
	//exit;
	redirect("menu.php?act=listAll&pid=$pid",3,"���ĳɹ���");
}
else
{
	showError("��������");
}
?>