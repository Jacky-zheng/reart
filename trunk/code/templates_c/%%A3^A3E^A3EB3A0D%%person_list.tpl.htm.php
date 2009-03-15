<?php /* Smarty version 2.6.6, created on 2009-03-14 15:48:28
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/person_list.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form name="form1" method="POST" >
	<table width='100%' border='1' cellspacing='0' cellpadding='0' align='center' bordercolordark='#FFFFFF' bordercolorlight='#000000'  bgcolor='#efefef'> 	
			<tr>
			<td align="center">						
				<input type="radio" name="status" onclick="location.href='?act=listAll&status=0'" value="0" <?php if ($this->_tpl_vars['iStatus'] == 0): ?> checked <?php endif; ?>  >普通会员&nbsp;
				<input type="radio" name="status" onclick="location.href='?act=listAll&status=1'" value="1" <?php if ($this->_tpl_vars['iStatus'] == 1): ?> checked <?php endif; ?> >停用会员
			 	<input type="radio" name="status" onclick="location.href='?act=listAll&status=-1'" value="-1" <?php if ($this->_tpl_vars['iStatus'] == -1): ?> checked <?php endif; ?>>全部&nbsp;&nbsp;
				<input type="text" name="q" value="<?php echo $this->_tpl_vars['q']; ?>
">
				<input type="submit" value="提交">              
	      	</td>         	 	
			</tr>
	</table>		 
			 
	<table width="100%" border="0" cellpadding="0" cellspacing="0"  class="tableborder">
	
		<tr class="header">
			<td width="3%"></td>
			<td width="48%">用户名</td>
			<td width="23%">真实姓名</td>
			<td width="22%">注册时间</td>
		  <td width="4%">操作</td>
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
		<tr>
			<td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
"></td> 			
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['userName']; ?>
 &nbsp;&nbsp;<?php if ($this->_tpl_vars['aList'][$this->_sections['list']['index']]['status'] == '1'): ?>[已停用]<?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['trueName']; ?>
</td>
			<td><?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['addDate']; ?>
</td>
		  <td>
           	  <a  href="?act=edit&id=<?php echo $this->_tpl_vars['aList'][$this->_sections['list']['index']]['id']; ?>
&pageNo=<?php echo $this->_tpl_vars['iPageNo']; ?>
">编辑</a><br>			</td>
		</tr>
	<?php endfor; endif; ?>	
		<tr bgcolor="#FFFFFF">
		 <td colspan=5>	
			<input type='checkbox' onclick="CheckAll(this.form.elements['id[]'], this.checked)">全选/反选
			 				 			 	
		 	<?php if ($this->_tpl_vars['iStatus'] == 1): ?>		 		<input type="button" name="check" value="启用" onclick="SubmitForm('check');">	
			<?php else: ?>	 		
				<input type="button" name="stop" value="停用" onclick="SubmitForm('stop');"> 			 			 	
		 	<?php endif; ?>
		 	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		 </td></tr>
    </table>		
</form>		  
		
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
    	case "stop": var str = "停用"; break;
    	case "check": var str = "审核"; break;
    	case "uncheck": var str = "设为未审核"; break;
    	default: break;    	
    }
    
    if(confirm("您真的要将选中的"+str+"吗?") == true)
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

