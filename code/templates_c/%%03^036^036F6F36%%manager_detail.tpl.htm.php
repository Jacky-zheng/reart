<?php /* Smarty version 2.6.6, created on 2009-03-14 08:14:31
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/manager_detail.tpl.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">	
		<tr class="header">
			<td colspan="2">查看用户[<?php echo $this->_tpl_vars['aInfo']['trueName']; ?>
]</td>
		</tr>
		
		<form name="add" method="POST" action="manager.php?act=modifySave" onsubmit="return checkForm();">
		<input type="hidden" name="managerID" value="<?php echo $this->_tpl_vars['aInfo']['id']; ?>
">
		<tr>
			<td width="100" class="altbg1">用户名：</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['userName']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">真实姓名</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['trueName']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">MSN</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['msn']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">QQ</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['qq']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">E-mail</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['email']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">联系电话</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['telephone']; ?>
</td>
		</tr>
		<tr>
			<td class="altbg1">手&nbsp;&nbsp;机</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aInfo']['mobile']; ?>
</td>
		</tr>		
		<tr>
			<td class="altbg1">账号状态</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['aStatus'][$this->_tpl_vars['aInfo']['status']]; ?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回" class="button"></td>
			<td align="right" class="altbg2">[<a href="manager.php?act=modify&id=<?php echo $this->_tpl_vars['aInfo']['id']; ?>
">编辑</a>]</td>	
		</tr>
		</form>
</table>

<?php echo '
<script language="javascript">

'; ?>

var nowExtFunc = <?php echo $this->_tpl_vars['nowExtFunc']; ?>
;
<?php echo $this->_tpl_vars['sNowDiffArray']; ?>

<?php echo '
var outHtml = "<table width=98% cellspacing=1 cellpadding=2 class=tableborder>";
var flag = 0;
for(var i=0; i < radioLables.length; i++)
{
	for(var j=0; j < nowExtFunc.length; j++)
	{
		if(radioValues[i] == nowExtFunc[j])
			flag = 1;
	}
	if(flag)
	{
		if(i % 3 == 0)
			outHtml = outHtml + "<tr>"
		outHtml = outHtml + "<td class=altbg2><input type=checkbox name=cc[] value="+radioValues[i]+" checked>&nbsp<font color=red>"+radioLables[i] + "</font></td>";
		if((i + 1) % 3 == 0)
			outHtml = outHtml + "</tr>"			
	}
	else
	{
		if(i % 3 == 0)
			outHtml = outHtml + "<tr>"
		outHtml = outHtml + "<td class=altbg2><input type=checkbox name=cc[] value="+radioValues[i]+">&nbsp"+radioLables[i] + "</td>";
		if((i + 1) % 3 == 0)
			outHtml = outHtml + "</tr>"
			
	}
	//set to zero
	flag = 0;
}
outHtml = outHtml + "</table>";
$(\'extFunc\').innerHTML = outHtml;

//加载默认的功能函数
function loadDefaultExtFunc()
{
'; ?>

	var radioLables = <?php echo $this->_tpl_vars['sAllRadioLables']; ?>
;
	var radioValues = <?php echo $this->_tpl_vars['sAllRadioValues']; ?>
;
<?php echo '
	var outHtml = "";
	for(var i=0; i < radioLables.length; i++)
	{
		outHtml = outHtml + "<input type=checkbox name=cc[] value="+radioValues[i]+">&nbsp"+radioLables[i];
		if((i+1) % 5 == 0)
			outHtml += "<br><br>";
	}
	$(\'extFunc\').innerHTML = outHtml;
}


</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>