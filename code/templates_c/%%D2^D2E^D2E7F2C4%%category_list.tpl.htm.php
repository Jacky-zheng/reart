<?php /* Smarty version 2.6.6, created on 2009-03-13 06:36:06
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/category_list.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script language="javascript">
	function checkInput()
	{
		
		//if($(\'orderID[]\').value == "")
		//{
			
		//}
	}
</script>
'; ?>


<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">	
		<tr class="header">				
			<td width="20%">中文名称</td>
			<td width="40%">英文名称</td>		
		
		  <td align="center">操作</td>
		</tr>
				
		<form method="POST" action="category.php?act=changeOrder&tbl=<?php echo $this->_tpl_vars['sTbl']; ?>
&pID=<?php echo $this->_tpl_vars['pID']; ?>
" onsubmit="return checkInput();">
		<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['aList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>  
		<tr bgcolor="White">			
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['name']; ?>
</td>
			<td><a href="?act=listAll&tbl=<?php echo $this->_tpl_vars['sTbl']; ?>
&corporationID=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['corporationID']; ?>
"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['ename']; ?>
</a></td>

			<td><a href="category.php?act=edit&tbl=<?php echo $this->_tpl_vars['sTbl']; ?>
&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="category.php?act=delete&tbl=<?php echo $this->_tpl_vars['sTbl']; ?>
&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
" onclick="return confirm('确定删除?');return false;"> 删除</a></td>
		</tr>		
		<?php endfor; endif; ?>
		<!--tr bgcolor="White" align="center"><td colspan="6"><input type="submit" value="更改排序号"></td></tr-->
		</form>
		</table>
<br>
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