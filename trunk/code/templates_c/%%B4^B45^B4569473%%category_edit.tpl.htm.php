<?php /* Smarty version 2.6.6, created on 2009-03-13 06:38:08
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/category_edit.tpl.htm */ ?>
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
		alert("����д���ƣ�");		
		$(\'name\').focus();
		return false;
	}
}
</script>

'; ?>


<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<tr class="header">
			<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
		</tr>
		
		<form name="add" method="POST" onsubmit="return checkInput();" action="category.php?act=editSave&tbl=<?php echo $this->_tpl_vars['sTbl']; ?>
">		
		<!--tr>
          <td width="100" class="altbg1">�ϼ�����</td>
          <td class="altbg2">
          <select name="pID">
          	<option value="0">һ������</option>          
          	<?php echo $this->_tpl_vars['sOptions']; ?>

          </select>&nbsp;&nbsp;*</td>
        </tr-->
        <tr>
          <td class="altbg1">��������</td>
          <td class="altbg2"><input type="text" name="name" size="50" class="input_text" value="<?php echo $this->_tpl_vars['aField']['name']; ?>
"  >&nbsp;&nbsp;*</td>
        </tr>
         <tr>
          <td class="altbg1">Ӣ������</td>
          <td class="altbg2"><input type="text" name="ename" size="50" class="input_text" value="<?php echo $this->_tpl_vars['aField']['ename']; ?>
" /></td>
        </tr>       
		<tr>
			<td align="left" class="altbg1">
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aField']['id']; ?>
">
				<input type="button" onclick="history.go(-1);" value="����"></td>
			<td align="right" class="altbg2"><input type="submit" name="submit" value=" �� �� "></td>
		</tr>
		</form>
		</table>		
		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>