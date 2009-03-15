<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:36
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/home.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
		
<div id="boardnews"></div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
	<tr class="header"><td colspan="2">个人信息</td></tr>
	<tr class="altbg2"><td width="25%">用户名:</td><td><?php echo $this->_tpl_vars['aInfo']['trueName']; ?>
 [ <a href="manager.php?act=modifySingle">修改资料</a> ]</td></tr>
	<tr class="altbg1"><td width="25%">登录IP:</td><td><?php echo $this->_tpl_vars['aInfo']['lastIP']; ?>
</td></tr>
	<tr class="altbg2"><td width="25%">登录时间:</td><td><?php echo $this->_tpl_vars['aInfo']['lastTime']; ?>
</td></tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>