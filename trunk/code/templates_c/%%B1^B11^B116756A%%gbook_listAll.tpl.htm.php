<?php /* Smarty version 2.6.6, created on 2009-03-14 12:52:46
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/gbook_listAll.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="form1" method="post">
<table width='100%' border='1' cellspacing='0' cellpadding='0' align='center' bordercolordark='#FFFFFF' bordercolorlight='#000000'  bgcolor='#efefef'> 
           <tr bgcolor="#FFFFFF"> 
            
           	<td align="center">���ݹؼ��֣�<input type="text" name="q" value="<?php echo $this->_tpl_vars['q']; ?>
">
           	  (�����������ݽ���ģ������)
        		<input type="submit" value="�ύ">
           	</td> 
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
							  <td><font color="red"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['userName']; ?>
</font></td>
							</tr>                                                               
                           
                            <tr bgcolor="#FFFFFF">
                            	<td><font color="#666666">�������ݣ�</font></td>
								<td>
									<font color="#CC0000">����ʱ�䣺<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['addDate']; ?>
</font><br>
                                	<font color="#666666"><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['content']; ?>
</font>								</td>
                            </tr>                           
						
                          </table>
                          <br>                         
          <?php endfor; endif; ?>
           <center>
           		<input type='checkbox' onclick="CheckAll(this.form.elements['id[]'], this.checked)">ȫѡ/��ѡ 
           		<input type="button" name="check" value="ɾ��" onclick="SubmitForm('del');">
           </center>
          </form>
		  </td></tr>
		  		
		</table>
          </form>		
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
    	case "del": var str = "ɾ��"; break;
    	case "check": var str = "���"; break;
    	default: break;    	
    }
    
    if(confirm("�����Ҫ��ѡ�е�"+str+"��?") == true)
    {
'; ?>
    	
    	FormObject.action = "?act="+arguments[0]+"&status=<?php echo $this->_tpl_vars['iStatus']; ?>
";
<?php echo '    	
    	FormObject.submit();
    }    
  }  
 
</script>
'; ?>