<?php /* Smarty version 2.6.6, created on 2009-03-14 07:25:47
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/artist_list.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder"><form name="form1" method="post" onsubmit="return checkForm();"><tr bgcolor="#FFFFFF"><td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">

  <tr  class="header">
    <td width="5%">&nbsp;</td>
    <td>����</td>
    <td>�Ա�</td>
    <td>ְҵ</td>
    <td>��������</td>

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
" /></td>
    <td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['name']; ?>
</td>
    <td><?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['sex'] == '0'): ?>��<?php else: ?> Ů<?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['profession']; ?>
</td>
    <td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['birthday']; ?>
</td>

    <td> <a href="?act=edit&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
">�༭</a> </td>
  </tr>
  <?php endfor; endif; ?>
  <tr bgcolor="#FFFFFF">
    <td colspan=8><input type='checkbox' onclick="CheckAll(this.form.elements['newsID[]'], this.checked)" />
      ȫѡ/��ѡ

      <input type="button" name="del" value="ɾ ��" onclick="SubmitForm('del');" /></td>
  </tr>
</table>  </td>
		    </tr>
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

