<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:48
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/news_list.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<tr>
		<td align="center" colspan="8">	
			 <form name="form1" method="post" onsubmit="return checkForm();">	
          <input type="radio" name="status" value="0" onclick="location.href='?act=listAll&status=0&cID='+cID.value;" <?php if ($this->_tpl_vars['iStatus'] == 0): ?> checked <?php endif; ?> >�������&nbsp;
          <input type="radio" name="status" value="1" onclick="location.href='?act=listAll&status=1&cID='+cID.value;" <?php if ($this->_tpl_vars['iStatus'] == 1): ?> checked <?php endif; ?>>�������&nbsp;           <input type="radio" name="status" value="3" onclick="location.href='?act=listAll&status=3&cID='+cID.value;" <?php if ($this->_tpl_vars['iStatus'] == 3): ?> checked <?php endif; ?>>�Ƽ���&nbsp;
       	  <input type="radio" name="status" value="2" onclick="location.href='?act=listAll&status=2&cID='+cID.value;" <?php if ($this->_tpl_vars['iStatus'] == 2): ?> checked <?php endif; ?>>����վ&nbsp;  
          <input type="radio" name="status" value="-1" onclick="location.href='?act=listAll&status=-1&cID='+cID.value;" <?php if ($this->_tpl_vars['iStatus'] == -1): ?> checked <?php endif; ?>>ȫ��&nbsp;
          <input type="text" name="q" value="<?php echo $this->_tpl_vars['q']; ?>
">
          <select name="cID" onchange="location.href='?act=listAll&cID='+cID.value;">
			<option value="0">����</option>
			<?php echo $this->_tpl_vars['sOptions']; ?>

		  </select>
		    
		  <input type="submit" value="����">
      </td>
	  </tr>		
	  
	 	 
		<tr  class="header">
			<td width="5%">&nbsp;</td>			
			<td>����</td>						
			<td>��Ŀ</td>	
			<td>��ҵ</td>	
			<td>������</td>
			<td>����ʱ��</td>
			<td>�������</td>
			<td>����</td>		
		</tr>	
		
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
		<tr bgcolor="#FFFFFF">
		    <td><input type="checkbox" name="newsID[]" id="newsID[]" value="<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
"></td>    		
   			<td>   			
   			<?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['status'] == '1' || $this->_tpl_vars['aList'][$this->_sections['list']['index']]['status'] == '3'): ?>    				<?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['isRed'] == 1): ?>
   					<a href="<?php echo $this->_tpl_vars['__NEWS_HTM'];  echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['fileName']; ?>
" target="_blank"><font color="Red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['title']; ?>
</font></a>
   				<?php else: ?>
   					<a href="<?php echo $this->_tpl_vars['__NEWS_HTM'];  echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['fileName']; ?>
" target="_blank"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['title']; ?>
</a>  				
   				<?php endif; ?>
   			<?php elseif ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['status'] == '0' || $this->_tpl_vars['aList'][$this->_sections['list']['index']]['status'] == '2'): ?>					<?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['isRed'] == 1): ?>
   					<font color="Red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['title']; ?>
</font>
   				<?php else: ?>
   					<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['title']; ?>
  				
   				<?php endif; ?>   			
   			<?php endif; ?>
   			<?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['pic']): ?>[<font color="Red">ͼ</font>]<?php endif; ?>
   			</td>	
   			<td><a href="?act=listAll&cID=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['cID']; ?>
&status=<?php echo $this->_tpl_vars['iStatus']; ?>
"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['catName']; ?>
</a></td>		    
   			<td><a href="?act=listAll&hangyeID=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['hangyeID']; ?>
&status=<?php echo $this->_tpl_vars['iStatus']; ?>
"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['hangyeName']; ?>
</a></td>		    
		    <td><a href="?act=listAll&userName=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['userName']; ?>
"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['userName']; ?>
</a></td>
		    <td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['addDate']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['click']; ?>
</td>
		    <td>
		    	<a href="?act=showPage&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
" target="_blank">Ԥ��</a>
		    	<a href="?act=makeStatic&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
" target="_blank">����</a>
		    	<a href="?act=edit&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
">�༭</a>
		    </td>
   	 	</tr>
  		<?php endfor; endif; ?>
		<tr bgcolor="#FFFFFF">
		 <td colspan=8>	
			<input type='checkbox' onclick="CheckAll(this.form.elements['newsID[]'], this.checked)">ȫѡ/��ѡ
		 	<?php if ($this->_tpl_vars['iStatus'] == 0): ?> 		 		<input type="button" name="check" value="�� ��" onclick="SubmitForm('check');">
		 		<input type="button" name="recommend" value="�� ��" onclick="SubmitForm('recommend');">
		 		<input type="button" name="recycle"  value="�������վ" onclick="SubmitForm('recycle');">		 		
		 	<?php elseif ($this->_tpl_vars['iStatus'] == 1): ?>		 		<input type="button" name="uncheck" value="��Ϊδ���" onclick="SubmitForm('uncheck');">
		 		<input type="button" name="recommend" value="�� ��" onclick="SubmitForm('recommend');">
		 		<input type="button" name="recycle"  value="�������վ" onclick="SubmitForm('recycle');">
		 	<?php elseif ($this->_tpl_vars['iStatus'] == 2): ?>		 		<input type="button" name="uncheck" value="��Ϊδ���" onclick="SubmitForm('uncheck');">
		 		<input type="button" name="del" value="ɾ ��" onclick="SubmitForm('del');">
			<?php elseif ($this->_tpl_vars['iStatus'] == 3): ?>		 		<input type="button" name="uncheck" value="��Ϊδ���" onclick="SubmitForm('uncheck');">
		 		<input type="button" name="del" value="ɾ ��" onclick="SubmitForm('del');">		 		
		 	<?php else: ?>
		 		<input type="button" name="recycle"  value="�������վ" onclick="SubmitForm('recycle');">
		 	<?php endif; ?>
		 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="cID1">
			<?php echo $this->_tpl_vars['sOptions']; ?>

		  </select>
		  <select name="actType">
		  <option value="1">����</option>
		  <option value="2">ת��</option>
		  </select>
		 	<input type="button" name="copy" value="�ύ" onclick="SubmitForm('copy')">
		 	
		 </td></tr>
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

<?php echo '
<script language="javascript">
function CheckAll(srcElem, do_check){
        if(typeof(srcElem)==\'undefined\') return;
        var cnt = (typeof(srcElem.length)!=\'undefined\')? srcElem.length : 0;
        if(cnt){
                for(var i=0;i<cnt; i++)
                        srcElem[i].checked = do_check;
        }else
                srcElem.checked = do_check;
}
function SubmitForm()
{	
    if (arguments.length<=0) return false;
    FormObject = document.getElementsByTagName("FORM")[0];
    if ((FormObject==null)||(FormObject==undefined)) return false;
   // alert(arguments[0]);
    switch(arguments[0])
    {
    	case "recycle": var str = "�������վ"; break;
    	case "del": var str = "����ɾ��"; break;
    	case "check": var str = "�������"; break;
    	case "recommend": var str = "��Ϊ�Ƽ�"; break;
    	case "uncheck": var str = "��Ϊδ���"; break;
    	case "copy": var str = "��������"; break;
    	default: break;    	
    }
    
    if(confirm("�����Ҫ��ѡ�е�"+str+"��?") == true)
    {
'; ?>
    	
    	FormObject.action = "?act="+arguments[0]+"&status=<?php echo $this->_tpl_vars['iStatus']; ?>
&cID=<?php echo $this->_tpl_vars['cID']; ?>
&cID1=<?php echo $this->_tpl_vars['cID1']; ?>
";
<?php echo '    	
    	FormObject.submit();
    }    
  }  
 
</script>
'; ?>

