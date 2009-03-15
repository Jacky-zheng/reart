<?php /* Smarty version 2.6.6, created on 2009-03-14 10:44:06
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/manager_listAll.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/pager_bar.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<br />
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">	
		<tr  class="header">
			<td width="7" height="20">&nbsp;</td>
			<td width="175">用户名</td>
			<td width="191">真实姓名</td>
			<td width="186">E-mail</td>
			<td width="193">最后登陆IP</td>
			<td width="199">最后登陆时间</td>
			<td width="278" align="right">动作</td>
		</tr>
		
		<?php unset($this->_sections['a_list']);
$this->_sections['a_list']['name'] = 'a_list';
$this->_sections['a_list']['loop'] = is_array($_loop=$this->_tpl_vars['aList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a_list']['show'] = true;
$this->_sections['a_list']['max'] = $this->_sections['a_list']['loop'];
$this->_sections['a_list']['step'] = 1;
$this->_sections['a_list']['start'] = $this->_sections['a_list']['step'] > 0 ? 0 : $this->_sections['a_list']['loop']-1;
if ($this->_sections['a_list']['show']) {
    $this->_sections['a_list']['total'] = $this->_sections['a_list']['loop'];
    if ($this->_sections['a_list']['total'] == 0)
        $this->_sections['a_list']['show'] = false;
} else
    $this->_sections['a_list']['total'] = 0;
if ($this->_sections['a_list']['show']):

            for ($this->_sections['a_list']['index'] = $this->_sections['a_list']['start'], $this->_sections['a_list']['iteration'] = 1;
                 $this->_sections['a_list']['iteration'] <= $this->_sections['a_list']['total'];
                 $this->_sections['a_list']['index'] += $this->_sections['a_list']['step'], $this->_sections['a_list']['iteration']++):
$this->_sections['a_list']['rownum'] = $this->_sections['a_list']['iteration'];
$this->_sections['a_list']['index_prev'] = $this->_sections['a_list']['index'] - $this->_sections['a_list']['step'];
$this->_sections['a_list']['index_next'] = $this->_sections['a_list']['index'] + $this->_sections['a_list']['step'];
$this->_sections['a_list']['first']      = ($this->_sections['a_list']['iteration'] == 1);
$this->_sections['a_list']['last']       = ($this->_sections['a_list']['iteration'] == $this->_sections['a_list']['total']);
?>
		<tr bgcolor="#FFFFFF">
			<td height="20">&nbsp;</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['userName']; ?>
</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['trueName']; ?>
</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['email']; ?>
</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['lastIP']; ?>
</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['lastTime']; ?>
</td>
			<td><a href="manager.php?act=detail&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['id']; ?>
">查看</a>&nbsp;&nbsp;
			<a href="manager.php?act=modify&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['id']; ?>
">编辑</a>&nbsp;&nbsp;
			<?php if ($this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['userName'] != 'admin'): ?>
			<?php if ($this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['status'] == '0'): ?>
			  <a href="manager.php?act=open&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['id']; ?>
" onclick="return confirm('确认开启[<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['trueName']; ?>
]的帐号');">开启</a>&nbsp;&nbsp;
			<?php else: ?>
			<a href="manager.php?act=closed&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['id']; ?>
" onclick="return confirm('确认关闭[<?php echo $this->_tpl_vars['aList'][$this->_sections['a_list']['index']]['trueName']; ?>
]的帐号');">关闭</a>
			<?php endif; ?>
			<?php endif; ?>			</td>
		  </tr>
		<?php endfor; endif; ?>	
		</table>
		<br />
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/pager_bar.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>