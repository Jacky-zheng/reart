<?php /* Smarty version 2.6.6, created on 2009-03-14 15:48:03
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/person_edit.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '

<script language="javascript">
function checkInput()
{ 
if (form1.question.value == "" || form1.question.value == "0")
  {
    alert("��ѡ��������ʾ����");
    form1.question.focus();
    return (false);
  }
  if (form1.answer.value == "")
  {
    alert("����д������ʾ�����");
    form1.answer.focus();
    return (false);
  }
  
if (form1.answer.value.length > 20)
  {
    alert("������ʾ����𰸲��ܴ���20λ�����������룡");
    form1.answer.focus();
    return (false);
  }
if(form1.hangyeID.value == 0)
{
	alert(\'��ѡ����ҵ\');
	form1.hangyeID.focus();
	return false;
}

if(form1.address.value == 0)
{
	alert(\'����дͨѶ��ַ\');
	form1.address.focus();
	return false;
}
	
if (form1.email.value == "")
{
	alert("�������ʼ���ַ��");
	form1.email.focus();
	return (false);
}
  
 if(form1.email.value.length!=0)
    {
    if (form1.email.value.charAt(0)=="." ||        
         form1.email.value.charAt(0)=="@"||       
         form1.email.value.indexOf(\'@\', 0) == -1 || 
         form1.email.value.indexOf(\'.\', 0) == -1 || 
         form1.email.value.lastIndexOf("@") ==form1.email.value.length-1 || 
         form1.email.value.lastIndexOf(".") ==form1.email.value.length-1)
     {
      alert("Email�ĸ�ʽ����ȷ��");
      form1.email.focus();
      return false;
      }
   }

 if (form1.phone.value == "")
  {
    alert("������绰�������ţ�");
    form1.phone.focus();
    return (false);
  }  
  
if(form1.qq.value == "")
{
	alert("����д����QQ/MSN");
	form1.qq.focus();
	return (false);
}
if(form1.idCard.value == "")
{
	alert("���֤���벻��Ϊ��");
	form1.idCard.focus();
	return (false);
}

if(isNaN(form1.idCard.value) || (form1.idCard.value.length != 18 ) )
{
	alert("��������ȷ�����֤����");
	form1.idCard.focus();
	return (false);
}

  if (form1.province.options[form1.province.selectedIndex].value=="0")
  {
    alert("ѡ�����");
    form1.province.focus();
    return (false);

  }
  if (form1.city.options[form1.city.selectedIndex].value=="0")
  {
    alert("ѡ�����");
    form1.city.focus();
    return (false);

  }
if (form1.county.options[form1.county.selectedIndex].value=="0")
  {
    alert("ѡ�����");
    form1.county.focus();
    return (false);

  }

return (true);
}
</script>

<script>
	document.onclick=function() {document.getElementById("popFrame").style.visibility="hidden";}
</script>
'; ?>


<IFRAME 
frameBorder=0 id=popFrame name=popFrame scrolling=no src="../js/date/images\popcjs.htm" style="BORDER-BOTTOM: 0px ridge; BORDER-LEFT: 0px ridge; BORDER-RIGHT: 0px ridge; BORDER-TOP: 0px ridge; POSITION: absolute; VISIBILITY: hidden; Z-INDEX: 65535"></IFRAME>
			
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<tr class="header">
			<td colspan="4">��������</td>
		</tr>		
		<form method="POST" name="form1" onsubmit="return checkInput();" enctype="multipart/form-data"  action="?act=editSave">
        <tr>
          <td width="100" class="altbg1">�û���</td>
          <td class="altbg2"><?php echo $this->_tpl_vars['aField']['userName']; ?>
&nbsp;&nbsp;</td>
          <td width="100" class="altbg1">����</td>
          <td class="altbg2"><input type="password" name="pwd" size="50" >
          <input type="checkbox" name="modifyPwd" value="1"><font color="Red">�޸ģ�</font>	 </td>
        </tr>		
              
        <tr>
          <td class="altbg1" >��ʵ����</td>
          <td class="altbg2"><input type="text" name="trueName" value="<?php echo $this->_tpl_vars['aField']['trueName']; ?>
" size="60"></td>  
              
          <td class="altbg1" >ͨѶ��ַ</td>
          <td class="altbg2"><input type="text" name="address" value="<?php echo $this->_tpl_vars['aField']['address']; ?>
" size="60" >&nbsp;&nbsp;*</td>       
       </tr>
       
       <tr>
          <td class="altbg1" >��������</td>
          <td class="altbg2"><input type="text" name="email" value="<?php echo $this->_tpl_vars['aField']['email']; ?>
" size="60"></td>
          <td class="altbg1" >�̶��绰</td>
          <td class="altbg2"><input type="text" name="phone" value="<?php echo $this->_tpl_vars['aField']['phone']; ?>
" size="60" ></td>
       </tr> 
 
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="����"></td>
			<td align="right" class="altbg2">
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aField']['id']; ?>
">					
				<input type="reset"  value=" �� �� ">
				<input type="submit" name="submit" value=" �� �� ">			</td>
			<td></td>
			<td></td>
		</tr>
		</form>
		</table>		

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>