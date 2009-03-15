<?php /* Smarty version 2.6.6, created on 2009-03-14 15:08:22
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/artist_edit.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'D:\cvsroot\ruiyi\./templates//admin/artist_edit.tpl.htm', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
	document.onclick=function() {document.getElementById("popFrame").style.visibility="hidden";}
</script>
'; ?>

<IFRAME frameBorder=0 id=popFrame name=popFrame scrolling=no src="../js/date/images\popcjs.htm" style="BORDER-BOTTOM: 0px ridge; BORDER-LEFT: 0px ridge; BORDER-RIGHT: 0px ridge; BORDER-TOP: 0px ridge; POSITION: absolute; VISIBILITY: hidden; Z-INDEX: 65535"></IFRAME>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<form name="add" method="POST" action="?act=editSave" enctype="multipart/form-data" onsubmit="return checkInput();">
		<tr class="header">
			<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
		</tr>
		<tr>
			<td width="100" class="altbg1">姓名：</td>
			<td class="altbg2"><input type="text" id="name" name="name" size="40" value="<?php echo $this->_tpl_vars['aField']['name']; ?>
">
		   <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">性别：</td>
			<td class="altbg2"><?php echo smarty_function_html_radios(array('name' => 'sex','options' => ($this->_tpl_vars['aSex']),'checked' => $this->_tpl_vars['aField']['sex']), $this);?>
<span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">职业：</td>
			<td class="altbg2"><input type="text" id="profession" name="profession" size="40" value="<?php echo $this->_tpl_vars['aField']['profession']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">出生日期：</td>
			<td class="altbg2">
			<input type="text" name="birthday" id="birthday" readonly=""value="<?php echo $this->_tpl_vars['aField']['birthday']; ?>
" class="input_text" />
              <img src="../js/date/images/date.gif" name="caseDealTime" id="caseDealTime" style="cursor:hand;" onclick="popFrame.fPopCalendar('birthday','birthday',event);" value=" 选择日期 "></td>
		</tr>			
		
		<tr>
			<td class="altbg1">作家简介：</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['sContent']; ?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回" class="button"></td>
			<td align="right" class="altbg2">
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aField']['id']; ?>
">
            <input type="submit" name="submit" value=" 提 交 " class="submit"></td>	
		</tr>
		</form>
</table>
<?php echo '
<script language="javascript">
//验证表单输入是否正确
function checkInput()
{

	if($(\'name\').value =="")
	{
		alert("姓名不能为空！");
		$(\'name\').focus();
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