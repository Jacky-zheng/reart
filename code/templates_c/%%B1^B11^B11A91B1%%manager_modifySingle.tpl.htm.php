<?php /* Smarty version 2.6.6, created on 2009-03-14 13:46:25
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/manager_modifySingle.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'D:\cvsroot\ruiyi\./templates//admin/manager_modifySingle.tpl.htm', 25, false),array('function', 'html_help', 'D:\cvsroot\ruiyi\./templates//admin/manager_modifySingle.tpl.htm', 53, false),array('function', 'html_radios', 'D:\cvsroot\ruiyi\./templates//admin/manager_modifySingle.tpl.htm', 54, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<tr class="header">
			<td colspan="2">����û�</td>
		</tr>
		
		<form name="add" method="POST" action="manager.php?act=modifySingleSave" onsubmit="return checkForm();">
		<tr>
			<td width="100" class="altbg1">�û�����</td>
			<td class="altbg2">
			<input type="text" id="text_userName" name="text_userName" value="<?php echo $this->_tpl_vars['aInfo']['userName']; ?>
" <?php if ($this->_tpl_vars['aInfo']['userName'] == $this->_tpl_vars['admin_flag']): ?> readonly <?php endif; ?>> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">��&nbsp;&nbsp;�룺</td>
			<td class="altbg2"><input type="text" id="text_pwd" name="text_pwd" value="<?php echo $this->_tpl_vars['randPwd']; ?>
"> <span class="starHit">*</span>
			<input type="checkbox" name="modifyPwd" value="1">�޸����룿
			</td>
		</tr>
		<!--tr>
			<td class="altbg1">��&nbsp;&nbsp;ɫ��</td>
			<td class="altbg2">
				<select name="select_roleID" id="select_roleID" >
				<option value="0">��ѡ���ɫ...</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['aRoleList']), $this);?>

				</select> <span class="starHit">*</span>			</td>
		</tr-->
		<tr>
			<td class="altbg1">��ʵ����</td>
			<td class="altbg2"><input type="text" id="text_trueName" name="text_trueName" value="<?php echo $this->_tpl_vars['aInfo']['trueName']; ?>
"> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">MSN</td>
			<td class="altbg2"><input type="text" id="text_msn" name="text_msn" value="<?php echo $this->_tpl_vars['aInfo']['msn']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">QQ</td>
			<td class="altbg2"><input type="text" id="text_qq" name="text_qq" value="<?php echo $this->_tpl_vars['aInfo']['qq']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">E-mail</td>
			<td class="altbg2"><input type="text" id="text_email" name="text_email" value="<?php echo $this->_tpl_vars['aInfo']['email']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">��ϵ�绰</td>
			<td class="altbg2"><input type="text" id="text_telephone" name="text_telephone" value="<?php echo $this->_tpl_vars['aInfo']['telephone']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">��&nbsp;&nbsp;��</td>
			<td class="altbg2"><input type="text" id="text_mobile" name="text_mobile" value="<?php echo $this->_tpl_vars['aInfo']['mobile']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">�˺�״̬&nbsp; <?php echo smarty_function_html_help(array('alt' => "��ο�FAQ 3.1"), $this);?>
</td>
			<td class="altbg2"><?php echo smarty_function_html_radios(array('name' => 'radio_status','options' => $this->_tpl_vars['aStatus'],'checked' => $this->_tpl_vars['aInfo']['status'],'separator' => "&nbsp;"), $this);?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="����" class="button"></td>
			<td align="right" class="altbg2"><input type="submit" name="submit" value=" �� �� " class="submit"></td>	
		</tr>
		</form>
</table>

<?php echo '
<script language="javascript">

//��֤�������Ƿ���ȷ
function checkForm()
{
	if($(\'text_userName\').value == "")
	{
		alert("�û�������Ϊ��");
		$(\'text_userName\').focus();
		return false;
	}
	if($(\'text_pwd\').value == "")
	{
		alert("���벻��Ϊ��");
		$(\'text_pwd\').focus();
		return false;
	}
	if($(\'text_trueName\').value == "")
	{
		alert("��������ʵ����");
		$(\'text_trueName\').focus();
		return false;
	}
	return true;
}
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>