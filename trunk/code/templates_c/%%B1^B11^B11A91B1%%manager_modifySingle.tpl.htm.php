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
			<td colspan="2">添加用户</td>
		</tr>
		
		<form name="add" method="POST" action="manager.php?act=modifySingleSave" onsubmit="return checkForm();">
		<tr>
			<td width="100" class="altbg1">用户名：</td>
			<td class="altbg2">
			<input type="text" id="text_userName" name="text_userName" value="<?php echo $this->_tpl_vars['aInfo']['userName']; ?>
" <?php if ($this->_tpl_vars['aInfo']['userName'] == $this->_tpl_vars['admin_flag']): ?> readonly <?php endif; ?>> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">密&nbsp;&nbsp;码：</td>
			<td class="altbg2"><input type="text" id="text_pwd" name="text_pwd" value="<?php echo $this->_tpl_vars['randPwd']; ?>
"> <span class="starHit">*</span>
			<input type="checkbox" name="modifyPwd" value="1">修改密码？
			</td>
		</tr>
		<!--tr>
			<td class="altbg1">角&nbsp;&nbsp;色：</td>
			<td class="altbg2">
				<select name="select_roleID" id="select_roleID" >
				<option value="0">请选择角色...</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['aRoleList']), $this);?>

				</select> <span class="starHit">*</span>			</td>
		</tr-->
		<tr>
			<td class="altbg1">真实姓名</td>
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
			<td class="altbg1">联系电话</td>
			<td class="altbg2"><input type="text" id="text_telephone" name="text_telephone" value="<?php echo $this->_tpl_vars['aInfo']['telephone']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">手&nbsp;&nbsp;机</td>
			<td class="altbg2"><input type="text" id="text_mobile" name="text_mobile" value="<?php echo $this->_tpl_vars['aInfo']['mobile']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">账号状态&nbsp; <?php echo smarty_function_html_help(array('alt' => "请参考FAQ 3.1"), $this);?>
</td>
			<td class="altbg2"><?php echo smarty_function_html_radios(array('name' => 'radio_status','options' => $this->_tpl_vars['aStatus'],'checked' => $this->_tpl_vars['aInfo']['status'],'separator' => "&nbsp;"), $this);?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回" class="button"></td>
			<td align="right" class="altbg2"><input type="submit" name="submit" value=" 提 交 " class="submit"></td>	
		</tr>
		</form>
</table>

<?php echo '
<script language="javascript">

//验证表单输入是否正确
function checkForm()
{
	if($(\'text_userName\').value == "")
	{
		alert("用户名不能为空");
		$(\'text_userName\').focus();
		return false;
	}
	if($(\'text_pwd\').value == "")
	{
		alert("密码不能为空");
		$(\'text_pwd\').focus();
		return false;
	}
	if($(\'text_trueName\').value == "")
	{
		alert("请输入真实姓名");
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