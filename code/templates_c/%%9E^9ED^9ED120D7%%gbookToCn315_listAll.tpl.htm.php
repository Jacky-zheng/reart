<?php /* Smarty version 2.6.6, created on 2009-03-13 03:53:16
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/gbookToCn315_listAll.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width='100%' border='1' cellspacing='0' cellpadding='0' align='center' bordercolordark='#FFFFFF' bordercolorlight='#000000'  bgcolor='#efefef'> 
           <tr bgcolor="#FFFFFF"> 
            <form name="form1" method="post" action="?act=listAll">
           	<td align="center">
           		<input type="radio" name="isReply" <?php if ($this->_tpl_vars['iIsReply'] == 0): ?> checked <?php endif; ?> value="0">δ�ظ�
           		<input type="radio" name="isReply" <?php if ($this->_tpl_vars['iIsReply'] == 1): ?> checked <?php endif; ?> value="1">�ѻظ�
           		<input type="radio" name="isReply" <?php if ($this->_tpl_vars['iIsReply'] == -1): ?> checked <?php endif; ?> value="-1">ȫ��
       			<input type="text" name="q" value="<?php echo $this->_tpl_vars['q']; ?>
">(���������������������ݽ���ģ������)
        		<input type="submit" name="Submit" value="�ύ">
           	</td>          	
           	</form>
          </tr>         
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/pager_bar.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 			
		<table class="tableborder" width="100%" cellpadding="0" cellspacing="0" align="center">	
		<tr class="header">
			<td><?php echo $this->_tpl_vars['sActName']; ?>
</td>	
		</tr>		
		
        <tr bgcolor="#ffffff"><td>
                   
         <form name="form2" method="POST">         
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
		<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#666666" style="display:" id="s_<?php echo $this->_sections['list']['index']; ?>
" align="center">
		
		                       <tr bgcolor="#FFFFFF">
                              <td width="5%" rowspan="7" align="center"><input type='checkbox' name="id[]" value="<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
"></td> 
							  <td width="8%"><font color="red">������</font></td>
							  <td width="38%"><font color="red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['trueName']; ?>
</font></td>
								<td width="8%"><font color="red">�绰��</font></td>
								<td><font color="red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['phone']; ?>
</font></td>       
		                      
	                        </tr>                  
                                                       
							
                          <tr bgcolor="#FFFFFF">
                            	<td>�Ա�</td><td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['sex']; ?>
</td>
                            	<td>�ֻ���</td><td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['mobile']; ?>
</td>
                            </tr> 
							 <tr bgcolor="#FFFFFF">                            	
                            	<td>email��</td><td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['email']; ?>
</td>
								<td>QQ��</td><td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['qq']; ?>
</td>
                            </tr> 
                         
							 <tr bgcolor="#FFFFFF">
                            	<td><font color="red">��ַ��</font></td><td><font color="red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['address']; ?>
</font></td>
								<td><font color="red">�ʱࣺ</font></td><td><font color="red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['postcode']; ?>
</font></td>
                            </tr> 
                            
                           
                            <tr bgcolor="#FFFFFF">
                            	<td><font color="#666666">�������ݣ�</font></td>
								<td colspan="3">
									<font color="#CC0000">����ʱ�䣺<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['addDate']; ?>
����ip��<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['ip']; ?>
</font><br>
                                	<font color="#666666"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['content']; ?>
</font>								</td>
                            </tr>                           
                            
                            <tr bgcolor="#FFFFFF"> 
                              <td>��<font color="#0000ff">�ظ�</font>��</td>
                              <td colspan="3">
                              
                              <?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['isReply']): ?>
                              	<font color="#CC0000">�ظ�ʱ�䣺<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['replyDate']; ?>
</font><br>
                              	<textarea name="content[]" cols="100" rows="5"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['replyContent']; ?>
</textarea>
                              <?php else: ?>
                              	<textarea name="content[]" cols="100" rows="5">���ã���л�����й���ҵ��������֧����񰮣�</textarea>                             
                              <?php endif; ?>
                              
                              <input type="hidden" name="haveReply[]" value="<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['isReply']; ?>
">
                              </td>
                            </tr>						
							
                          </table>
                          <br>                         
          <?php endfor; endif; ?>
           <center>
           		<input type="button" onClick="chkall()" value="ȫѡ/��ѡ"> 
           		<input type="button" value="ɾ ��" onclick="delORreply(1);"> 
           		<input type="button" value="�� ��" onclick="delORreply(2);">
           </center>
           </form>
		  </td></tr>		
		</table>
		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/pager_bar.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br> 	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script language="javascript">
function delORreply(flag)
{
	if(judge())
	{
		//alert(flag);
		if(flag == 1)	
			form2.action="?act=del";
		else
			form2.action="?act=reply";			
	
		form2.submit();
	}
}
</script>	
'; ?>