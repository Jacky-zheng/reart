<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:35
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/redirect_login.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��̨����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php echo '
<link href="images/login.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
function redirect(url) {
	window.location.replace(url);
}
</script>
'; ?>

</head>

<br /><br /><br /><br />

<table width="600" border="0" cellpadding="8" cellspacing="0" class="logintable">
	<tr class="loginheader">
		<td width="80"></td>
		<td width="100"></td>
		<td></td>
		<td width="120"></td>
		<td width="80"></td>
	</tr>
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
	<tr>
		<td>&nbsp;</td>
		<td align="center" colspan="3" >
			<?php echo $this->_tpl_vars['sMSG']; ?>
<br><br>
			<a href="<?php echo $this->_tpl_vars['sURL']; ?>
">������������û���Զ���ת����������</a>
			<script>setTimeout("redirect('<?php echo $this->_tpl_vars['sURL']; ?>
');", <?php echo $this->_tpl_vars['iTime']*1000; ?>
);</script><br><br><br>			
		</td>
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
		<td colspan="5" align="center">
			��Ȩ����&copy;2009-2010   	
		</td>
	</tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table>
</html>