<?php /* Smarty version 2.6.6, created on 2009-03-13 15:30:33
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/news_add.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'D:\cvsroot\ruiyi\./templates//admin/news_add.tpl.htm', 29, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<form name="add" method="POST" action="?act=addSave" enctype="multipart/form-data" onsubmit="return checkInput();">
		<tr class="header">
			<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
		</tr>
		<tr>
			<td width="100" class="altbg1">��Ʒ�������</td>
			<td class="altbg2">
			<select name="cID">
				<?php echo $this->_tpl_vars['sOptions']; ?>

			</select>&nbsp;&nbsp; <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">��Ʒ���ƣ�</td>
			<td class="altbg2"><input type="text" id="title" name="title" size="40" value=""> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">��Ʒ�۸�</td>
			<td class="altbg2"><input type="text" name="keywords" size="40" value=""></td>
		</tr>
		<tr>
			<td class="altbg1">��Ʒ�����</td>
			<td class="altbg2"><input type="text" id="intro" name="intro" size="40" value=""></td>
		</tr>
		<tr>
			<td class="altbg1">��Ʒ״̬��</td>
			<td class="altbg2"><?php echo smarty_function_html_radios(array('name' => 'status','options' => ($this->_tpl_vars['aENUM']),'checked' => 0), $this);?>
<span class="starHit">*</span></td>
		</tr>		
		<tr>
			<td class="altbg1">��Ʒ������</td>
			<td class="altbg2"><textarea name="textarea" cols="50" rows="5"></textarea></td>
		</tr>			
		
		<tr>
			<td class="altbg1">�������ݣ�</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['sContent']; ?>
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
function checkInput()
{
	if($(\'cID\').value =="")
	{
		alert("��ѡ��������Ŀ��");
		$(\'cID\').focus();
		return false;	
	}
	if($(\'hangyeID\').value =="")
	{
		alert("��ѡ��������ҵ��");
		$(\'hangyeID\').focus();
		return false;	
	}
	if($(\'title\').value =="")
	{
		alert("���ű��ⲻ��Ϊ�գ�");
		$(\'title\').focus();
		return false;	
	}
	if($(\'keywords\').value =="")
	{
		alert("���Źؼ��ֲ���Ϊ�գ�");
		$(\'keywords\').focus();
		return false;	
	}
	if($(\'intro\').value =="")
	{
		alert("���ż�鲻��Ϊ�գ�");
		$(\'intro\').focus();
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