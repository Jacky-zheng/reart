<?php /* Smarty version 2.6.6, created on 2009-03-14 15:13:11
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/redirect.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php echo '
<link href="images/admincp.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/js/common.js"></script>
<script src="/js/iframe.js" type="text/javascript"></script>
<script language="JavaScript">
function checkalloption(form, value) {
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.value == value && e.type == \'radio\' && e.disabled != true) {
			e.checked = true;
		}
	}
}

function checkallvalue(form, value, checkall) {
	var checkall = checkall ? checkall : \'chkall\';
	for(var i = 0; i < form.elements.length; i++) {
		var e = form.elements[i];
		if(e.type == \'checkbox\' && e.value == value) {
			e.checked = form.elements[checkall].checked;
		}
	}
}

function zoomtextarea(objname, zoom) {
	zoomsize = zoom ? 10 : -10;
	obj = $(objname);
	if(obj.rows + zoomsize > 0 && obj.cols + zoomsize * 3 > 0) {
		obj.rows += zoomsize;
		obj.cols += zoomsize * 3;
	}
}

function redirect(url) {
	window.location.replace(url);
}

var collapsed = getcookie(\'fUx_collapse\');
function collapse_change(menucount) {
	if($(\'menu_\' + menucount).style.display == \'none\') {
		$(\'menu_\' + menucount).style.display = \'\';collapsed = collapsed.replace(\'[\' + menucount + \']\' , \'\');
		$(\'menuimg_\' + menucount).src = \'./images/admincp/menu_reduce.gif\';
	} else {
		$(\'menu_\' + menucount).style.display = \'none\';collapsed += \'[\' + menucount + \']\';
		$(\'menuimg_\' + menucount).src = \'./images/admincp/menu_add.gif\';
	}
	setcookie(\'fUx_collapse\', collapsed, 2592000);
}
</script>
'; ?>

</head>

<body leftmargin="10" topmargin="10">
<table width="100%" border="0" cellpadding="2" cellspacing="6">
	<tr>
		<td>
		<br><br><br><br><br><br>
		<table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="tableborder">
			<tr class="header"><td>ruiyi 提示</td></tr>
			<tr>
				<td class="altbg2">
				<div align="center">
				<br><br><br><?php echo $this->_tpl_vars['sMSG']; ?>
<br><br><br>
				<a href="<?php echo $this->_tpl_vars['sURL']; ?>
">如果您的浏览器没有自动跳转，请点击这里</a>
				<script>setTimeout("redirect('<?php echo $this->_tpl_vars['sURL']; ?>
');", <?php echo $this->_tpl_vars['iTime']*1000; ?>
);</script>
				<br><br></div>
				<br><br>
				</td>
			</tr>
		</table>
<br><br><br>
		</td>
	</tr>
</table>

<br><br>

<div class="footer"><hr size="0" noshade color="#86B9D6" width="80%">

版权所有&copy;2009-2010  	

</div><br>
</body>
</html>