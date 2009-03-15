<?php /* Smarty version 2.6.6, created on 2009-03-13 03:52:43
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/menu_add.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
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
		$(\'tr_powerID\').style.display = "none";
		$(\'tr_url\').style.display = "none";
		$(\'powerID\').value = 0;
		$(\'url\').value = "";
	}	
	else
	{		
		$(\'tr_powerID\').style.display = "";
		$(\'tr_url\').style.display     = "";
	}	
}
		
</script>

'; ?>



<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
	<tr class="header">
		<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
	</tr>
	<form name="add" method="POST" onsubmit="return checkInput();" action="menu.php?act=addSave">		
	<tr class="altbg2">
		<td width="25%">上级菜单:</td>
		<td>
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
" <?php if ($this->_tpl_vars['aMenuList'][$this->_sections['menuList']['index']]['id'] == $this->_tpl_vars['pid']): ?>selected<?php endif; ?> ><?php echo $this->_tpl_vars['aMenuList'][$this->_sections['menuList']['index']]['name']; ?>
</option>
           		<?php endfor; endif; ?>
          </select>&nbsp;&nbsp;*</td>
	</tr>
	<tr class="altbg1">
		<td>名称:</td>
		<td><input type="text" name="name" size="50">&nbsp;&nbsp;*</td>
	</tr>
	<tr class="altbg2" id="tr_url"  <?php if ($this->_tpl_vars['pid'] == 0): ?> style="display:none;" <?php endif; ?>>
		<td>链接地址:</td>
		<td><input type="text" name="url" size="50" class="input_text"  >&nbsp;&nbsp;*</td>
	</tr>
	<tr class="altbg1" id="tr_powerID" <?php if ($this->_tpl_vars['pid'] == 0): ?> style="display:none;" <?php endif; ?>>
		<td>权限:</td>
		<td>
			<table width="98%" cellspacing="1" cellpadding="2" class="tableborder">
          <?php unset($this->_sections['powerList']);
$this->_sections['powerList']['name'] = 'powerList';
$this->_sections['powerList']['loop'] = is_array($_loop=$this->_tpl_vars['aPowerList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['powerList']['show'] = true;
$this->_sections['powerList']['max'] = $this->_sections['powerList']['loop'];
$this->_sections['powerList']['step'] = 1;
$this->_sections['powerList']['start'] = $this->_sections['powerList']['step'] > 0 ? 0 : $this->_sections['powerList']['loop']-1;
if ($this->_sections['powerList']['show']) {
    $this->_sections['powerList']['total'] = $this->_sections['powerList']['loop'];
    if ($this->_sections['powerList']['total'] == 0)
        $this->_sections['powerList']['show'] = false;
} else
    $this->_sections['powerList']['total'] = 0;
if ($this->_sections['powerList']['show']):

            for ($this->_sections['powerList']['index'] = $this->_sections['powerList']['start'], $this->_sections['powerList']['iteration'] = 1;
                 $this->_sections['powerList']['iteration'] <= $this->_sections['powerList']['total'];
                 $this->_sections['powerList']['index'] += $this->_sections['powerList']['step'], $this->_sections['powerList']['iteration']++):
$this->_sections['powerList']['rownum'] = $this->_sections['powerList']['iteration'];
$this->_sections['powerList']['index_prev'] = $this->_sections['powerList']['index'] - $this->_sections['powerList']['step'];
$this->_sections['powerList']['index_next'] = $this->_sections['powerList']['index'] + $this->_sections['powerList']['step'];
$this->_sections['powerList']['first']      = ($this->_sections['powerList']['iteration'] == 1);
$this->_sections['powerList']['last']       = ($this->_sections['powerList']['iteration'] == $this->_sections['powerList']['total']);
?>
          	<?php if (( $this->_sections['powerList']['index'] ) % 3 == 0): ?>
			<tr>
			<?php endif; ?>
			<td class="altbg2"><input type="radio" name="powerID" value="<?php echo $this->_tpl_vars['aPowerList'][$this->_sections['powerList']['index']]['id']; ?>
">&nbsp;<?php echo $this->_tpl_vars['aPowerList'][$this->_sections['powerList']['index']]['fileNameCn']; ?>
-<?php echo $this->_tpl_vars['aPowerList'][$this->_sections['powerList']['index']]['powerNameCn']; ?>
</td>
			<?php if (( $this->_sections['powerList']['index'] + 1 ) % 3 == 0): ?>
			</tr>
			<?php endif; ?>
			<?php endfor; endif; ?>
			</table>
		</td>
	</tr>
	<tr class="altbg2">
		<td><input type="button" onclick="history.go(-1);" value="返回"></td>
		<td><input type="submit" name="submit" value=" 提 交 "></td>
	</tr>		
	</form>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>