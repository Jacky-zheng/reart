<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:37
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/menu.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">

<?php echo '
<link rel="stylesheet" type="text/css" id="css" href="images/admincp.css">
<script src="../js/common.js" type="text/javascript"></script>
<script src="../js/iframe.js" type="text/javascript"></script>

<script>
var collapsed = getcookie(\'cdb_collapse\');
function collapse_change(menucount) {
	if($(\'menu_\' + menucount).style.display == \'none\') {
		$(\'menu_\' + menucount).style.display = \'\';collapsed = collapsed.replace(\'[\' + menucount + \']\' , \'\');
		$(\'menuimg_\' + menucount).src = \'images/menu_reduce.gif\';
	} else {
		$(\'menu_\' + menucount).style.display = \'none\';collapsed += \'[\' + menucount + \']\';
		$(\'menuimg_\' + menucount).src = \'images/menu_add.gif\';
	}
	//setcookie(\'cdb_collapse\', collapsed, 2592000);
}

function showOrHiddenAllMenu(iType,iBig)
{
	
	var bigMenuNum = iBig;
	
	if(iType == 1)
	{
		//show all
		for(var i=0; i < bigMenuNum; i++)
		{
			$("menu_" + i).style.display = "";			
		}
		$("menu_face").style.display = "";
	} else
	{
		//hidden all
		for(var i=0; i < bigMenuNum; i++)
		{
			$("menu_" + i).style.display = "none";
		}
		$("menu_face").style.display = "none";
	}
}


</script>
'; ?>


</head>

<body style="margin:5px!important;margin:3px;">
<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
<tr class="leftmenutext">
	<td bgcolor="#F8F8F8" align="center" height="18">
	<span onclick="showOrHiddenAllMenu(1,<?php echo $this->_tpl_vars['iBigCatNum']; ?>
);" style="cursor:hand;" title="展开所有菜单">&nbsp&nbsp&nbsp&nbsp&nbsp[ 展开]</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span onclick="showOrHiddenAllMenu(0,<?php echo $this->_tpl_vars['iBigCatNum']; ?>
);" style="cursor:hand;" title="关闭所有菜单">[ 关闭]</span>
	</td>
</tr>
</table>

<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">

	<tr class="leftmenutext">
		<td>
			<div align="center">
				<a href="/" target="_blank">网站首页</a>&nbsp;&nbsp;				
				<a href="home.php" target="main">后台首页</a>
			</div>
		</td>
	</tr>
</table>

<div id="home">

<?php if ($this->_tpl_vars['isRootLogin']): ?>
<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
	<tr class="leftmenutext">
		<td>
			<a href="###" onclick="collapse_change('face')"><img id="menuimg_0" src="images/menu_reduce.gif" border="0"/></a>&nbsp;
			<a href="###" onclick="collapse_change('face')">系统设置</a>
		</td>
	</tr>
	<tbody id="menu_face" style="display:">
	<tr class="leftmenutd">
		<td>
			<table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
				<tr><td><a href="menu.php?act=add" target="main">添加左边菜单</a></td></tr>
				<tr><td><a href="menu.php?act=listAll" target="main">左边菜单列表</a></td></tr>				
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php endif; ?>

		  
<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['aBigList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist" style="margin-bottom: 5px;">
	<tr class="leftmenutext">
		<td>
			<a href="###" onclick="collapse_change(<?php echo $this->_sections['list']['index']; ?>
)">
				<img id="menuimg_<?php echo $this->_sections['list']['index']; ?>
" src="images/menu_reduce.gif" border="0">
			</a>&nbsp;
			<a href="###" onclick="collapse_change(<?php echo $this->_sections['list']['index']; ?>
)"><?php echo $this->_tpl_vars['aBigList'][$this->_sections['list']['index']]['name']; ?>
</a>
		</td>
	</tr>
	<tbody id="menu_<?php echo $this->_sections['list']['index']; ?>
" style="display:">
	<tr class="leftmenutd">
		<td>
			<table border="0" cellspacing="0" cellpadding="0" class="leftmenuinfo">
			<?php unset($this->_sections['smallList']);
$this->_sections['smallList']['name'] = 'smallList';
$this->_sections['smallList']['loop'] = is_array($_loop=$this->_tpl_vars['aSmallAllList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['smallList']['show'] = true;
$this->_sections['smallList']['max'] = $this->_sections['smallList']['loop'];
$this->_sections['smallList']['step'] = 1;
$this->_sections['smallList']['start'] = $this->_sections['smallList']['step'] > 0 ? 0 : $this->_sections['smallList']['loop']-1;
if ($this->_sections['smallList']['show']) {
    $this->_sections['smallList']['total'] = $this->_sections['smallList']['loop'];
    if ($this->_sections['smallList']['total'] == 0)
        $this->_sections['smallList']['show'] = false;
} else
    $this->_sections['smallList']['total'] = 0;
if ($this->_sections['smallList']['show']):

            for ($this->_sections['smallList']['index'] = $this->_sections['smallList']['start'], $this->_sections['smallList']['iteration'] = 1;
                 $this->_sections['smallList']['iteration'] <= $this->_sections['smallList']['total'];
                 $this->_sections['smallList']['index'] += $this->_sections['smallList']['step'], $this->_sections['smallList']['iteration']++):
$this->_sections['smallList']['rownum'] = $this->_sections['smallList']['iteration'];
$this->_sections['smallList']['index_prev'] = $this->_sections['smallList']['index'] - $this->_sections['smallList']['step'];
$this->_sections['smallList']['index_next'] = $this->_sections['smallList']['index'] + $this->_sections['smallList']['step'];
$this->_sections['smallList']['first']      = ($this->_sections['smallList']['iteration'] == 1);
$this->_sections['smallList']['last']       = ($this->_sections['smallList']['iteration'] == $this->_sections['smallList']['total']);
?> 				<?php if ($this->_tpl_vars['aSmallAllList'][$this->_sections['smallList']['index']]['pID'] == $this->_tpl_vars['aBigList'][$this->_sections['list']['index']]['id']): ?>
					<tr><td><a href="<?php echo $this->_tpl_vars['aSmallAllList'][$this->_sections['smallList']['index']]['url']; ?>
" target="main"><?php echo $this->_tpl_vars['aSmallAllList'][$this->_sections['smallList']['index']]['name']; ?>
</a></td></tr>
				<?php endif; ?>
			<?php endfor; endif; ?>	
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php endfor; endif; ?>
</div>

<table width="146" border="0" cellspacing="0" align="center" cellpadding="0" class="leftmenulist">
	<tr class="leftmenutext">
		<td><div style="margin-left:48px;"><a href="login.php?act=logout" target="_top">退出</a></td>
	</tr>
</table>
</body>
</html>