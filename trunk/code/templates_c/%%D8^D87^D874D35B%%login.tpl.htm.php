<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:28
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/login.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��̨����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<link href="images/login.css" rel="stylesheet" type="text/css" />
</head>
<?php echo '
<script language="JavaScript">
if(self.parent.frames.length != 0) {
	self.parent.location=document.location;
}
function redirect(url) {
	window.location.replace(url);
}

function refreshValidateCode()
{
	//alert(document.getElementById(\'previewPic\').src);
	//login.previewPic.src="../js/validateCode.php";
	document.getElementById("previewPic").src = "../js/validateCode.php?t="+Math.random();
}	
</script>
'; ?>

<br /><br /><br /><br />

<table width="600" border="0" cellpadding="8" cellspacing="0" class="logintable">
	<tr class="loginheader"><td width="80"></td><td width="100"></td><td></td><td width="120"></td><td width="80"></td></tr>
	<tr style="height:40px">
		<td>&nbsp;</td>
		<td class="line1"><span style="color:#ffff66;font-size:14px;font-weight: bold;">��̨����</span></td>
		<td class="line1">&nbsp;</td>
		<td class="line1">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
<form method="post" name="login" action="?act=doLogin">
	<tr>
		<td>&nbsp;</td>
		<td align="right">�û���:</td>
		<td><input type="text" name="userName" size="25"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td align="right">��    ��:</td>
		<td><input type="password" name="password" size="25"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="right">�� ֤ ��:</td>
		<td><input type="text" name="validateCode" size="6"> &nbsp;<img id="previewPic" src="../js/validateCode.php">&nbsp;</td>
		<td><a href="#" onclick="refreshValidateCode();">ˢ����֤��</a></td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td class="line1">&nbsp;</td>
		<td class="line1" align="center"><input type="submit" class="button" value="�� ��" />		
		</form>		
		<script language="JavaScript">document.login.userName.focus();</script>
		</td>
		<td class="line1">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td class="line2">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5" align="center">��Ȩ����&copy;2009-2010 ruiyi</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
</html>