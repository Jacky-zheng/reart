<?php /* Smarty version 2.6.6, created on 2009-03-13 03:53:13
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/about_us_edit.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<form name="add" method="POST" action="?act=editSave"  onsubmit="return checkInput();">
		<tr class="header">
			<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
		</tr>
		<tr>
			<td width="100" class="altbg1">标题：</td>
			<td class="altbg2"><input type="text" id="title" name="title" size="60" value="<?php echo $this->_tpl_vars['aField']['title']; ?>
"> <span class="starHit">*</span></td>
		</tr>			
		
		<?php if (count($_from = (array)$this->_tpl_vars['aNum'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<?php endforeach; unset($_from); endif; ?>	
			
		<tr>
			<td class="altbg1">新闻内容：</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['sContent']; ?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回" class="button"></td>
			<td align="right" class="altbg2">

				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aField']['id']; ?>
">

				<input type="submit" name="submit" value=" 提 交 " class="submit">			</td>
		</tr>
		</form>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>