<?php /* Smarty version 2.6.6, created on 2009-03-10 09:34:36
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/top.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo '
<link rel="stylesheet" type="text/css" id="css" href="images/admincp.css">
<script>
var menus = new Array(\'basic\', \'forums\', \'users\', \'posts\', \'api\', \'others\', \'tools\', \'home\');
function togglemenu(id) {
	if(parent.menu) {
		for(k in menus) {
			if(parent.menu.document.getElementById(menus[k])) {
				parent.menu.document.getElementById(menus[k]).style.display = menus[k] == id ? \'\' : \'none\';
			}
		}
	}
}
function findtags(parentobj, tag) {
	if(typeof parentobj.getElementsByTagName != \'undefined\') {return parentobj.getElementsByTagName(tag);}
	else if(parentobj.all && parentobj.all.tags) {return parentobj.all.tags(tag);}
	else {return null;}
}
function sethighlight(n) {
	var lis = findtags(document, \'li\');
	for(var i = 0; i < lis.length; i++) {
		lis[i].id = \'\';
	}
	lis[n].id = \'menuon\';
}

togglemenu("home");
</script>

<script src="../js/iframe.js" type="text/javascript"></script>
'; ?>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="topmenubg">
	<tr>
		<td rowspan="2" width="160px">
			<div class="logo">
			<a href="/" target="_blank"><img src="images/logo.gif" alt="" class="logoimg" border="0"/></a>
			<span class="editiontext">ruiyi <span class="editionnumber">1.0</span><br />后台管理</span>
			</div>
		</td>
		<td>
			<div class="topmenu">
				<ul>
				<li><span>您好，<?php echo $this->_tpl_vars['__TRUENAME']; ?>
！&nbsp;&nbsp;>><a href="manager.php?act=modifySingle" target="main">修改资料</a></span></li>
				</ul>
			</div>
		</td>
	</tr>
</table>
</body>
</html>