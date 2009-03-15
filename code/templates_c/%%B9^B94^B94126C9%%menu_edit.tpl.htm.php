<?php /* Smarty version 2.6.6, created on 2009-03-14 10:21:06
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/menu_edit.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script language="javascript">
function checkInput() 
{		
	if($(\'name\').value == "")
	{
		alert("请填写名称！");		
		$(\'name\').focus();
		return false;
	}

	if($(\'pID\').value > 0)
	{
		if($(\'url\').value == "" )
		{
			alert(\'请填写链接地址！\');
			$(\'url\').focus();			
			return false;
		}
		var len = document.add.powerID.length;	
		var powerID = "";
		//alert(len);
		for(var i=0; i<len; i++ )
		{
			if(document.add.powerID[i].checked) powerID = document.add.powerID[i].value;
		}
				
		if(powerID == "")
		{
			alert("请选择权限！");
	   		return false;
		}		
	}	
	return true;
}

function displayPowerUrl()
{
	if($(\'pID\').value == 0)
	{	
		document.getElementById("tr_powerID").style.display = "none";
		document.getElementById("tr_url").style.display = "none";
		//$(\'powerID\').value = 0;
		//$(\'url\').value = "";
	}	
	else
	{
		document.getElementById("tr_powerID").style.display = "";
		document.getElementById("tr_url").style.display = "";
	}
}
		
</script>

'; ?>

			
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<tr class="header">
			<td colspan="2">修改左边菜单</td>
		</tr>
		
		<form  method="POST" onsubmit="return checkInput();" action="menu.php?act=editSave">		
		<tr>
          <td width="100" class="altbg1">上级菜单</td>
          <td class="altbg2">
          <select name="pID" onchange="displayPowerUrl();">
          	<option value="0">新增</option>                     	
          	<?php unset($this->_sections['menuList']);
$this->_sections['menuList']['name'] = 'menuList';
$this->_sections['menuList']['loop'] = is_array($_loop=($this->_tpl_vars['aMenuList'])) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuList']['show'] = true;
$this->_sections['menuList']['max'] = $this->_sections['menuList']['loop'];
$this->_sections['menuList']['step'] = 1;
$this->_sections['menuList']['start'] = $this->_sections['menuList']['step'] > 0 ? 0 : $this->_sections['menuList']['loop']-1;
if ($this->_sections['menuList']['show']) {
    $this->_sections['menuList']['total'] = $this->_sections['menuList']['loop'];
    if ($this->_sections['menuList']['total'] == 0)
        $this->_sections['menuList']['show'] = false;
} else
    $this->_sections['menuList']['total'] = 0;
if ($this->_sections['menuList']['show']):

            for ($this->_sections['menuList']['index'] = $this->_sections['menuList']['start'], $this->_sections['menuList']['iteration'] = 1;
                 $this->_sections['menuList']['iteration'] <= $this->_sections['menuList']['total'];
                 $this->_sections['menuList']['index'] += $this->_sections['menuList']['step'], $this->_sections['menuList']['iteration']++):
$this->_sections['menuList']['rownum'] = $this->_sections['menuList']['iteration'];
$this->_sections['menuList']['index_prev'] = $this->_sections['menuList']['index'] - $this->_sections['menuList']['step'];
$this->_sections['menuList']['index_next'] = $this->_sections['menuList']['index'] + $this->_sections['menuList']['step'];
$this->_sections['menuList']['first']      = ($this->_sections['menuList']['iteration'] == 1);
$this->_sections['menuList']['last']       = ($this->_sections['menuList']['iteration'] == $this->_sections['menuList']['total']);
?>
           		<option value="<?php echo $this->_tpl_vars['aMenuList'][$this->_sections['menuList']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['aMenuList'][$this->_sections['menuList']['index']]['id'] == $this->_tpl_vars['aInfo']['pID']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['aMenuList'][$this->_sections['menuList']['index']]['name']; ?>
</option>
           <?php endfor; endif; ?>
          </select>&nbsp;&nbsp;*</td>
        </tr>
        <tr>
          <td class="altbg1">名称</td>
          <td class="altbg2"><input type="text" name="name" size="50" class="input_text" value="<?php echo $this->_tpl_vars['aInfo']['name']; ?>
">&nbsp;&nbsp;*</td>
        </tr>
        <tr id="tr_url" <?php if ($this->_tpl_vars['aInfo']['pID'] == 0): ?> style="display:none;" <?php endif; ?>>
          <td class="altbg1">链接地址</td>
          <td class="altbg2"><input type="text" name="url" size="50" class="input_text" value="<?php echo $this->_tpl_vars['aInfo']['url']; ?>
"  >&nbsp;&nbsp;*</td>
        </tr>
       		
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回"></td>
			<td align="right" class="altbg2">
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aInfo']['id']; ?>
">
				<input type="submit" name="submit" value=" 提 交 ">
			</td>
		</tr>
		</form>
		</table>		


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>