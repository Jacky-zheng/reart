<?php /* Smarty version 2.6.6, created on 2009-03-13 09:32:17
         compiled from D:%5Ccvsroot%5Cruiyi%5C./templates//admin/news_edit.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'D:\cvsroot\ruiyi\./templates//admin/news_edit.tpl.htm', 19, false),array('function', 'html_radios', 'D:\cvsroot\ruiyi\./templates//admin/news_edit.tpl.htm', 36, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tableborder">
		<form name="add" method="POST" action="?act=editSave" enctype="multipart/form-data" onsubmit="return checkInput();">
		<tr class="header">
			<td colspan="2"><?php echo $this->_tpl_vars['PAGE_FUNC_SMALL_NAME']; ?>
</td>
		</tr>		
		<tr>
			<td width="100" class="altbg1">所属栏目：</td>
			<td class="altbg2">
			<select name="cID">
				<?php echo $this->_tpl_vars['sOptions']; ?>

			</select>&nbsp;&nbsp; <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td width="100" class="altbg1">所属行业：</td>
			<td class="altbg2">
			<select name="hangyeID">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['aHangyeList'],'selected' => $this->_tpl_vars['aField']['hangyeID']), $this);?>

			</select>&nbsp;&nbsp; <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">新闻标题：</td>
			<td class="altbg2"><input type="text" id="title" name="title" size="60" value="<?php echo $this->_tpl_vars['aField']['title']; ?>
"> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">新闻关键字：</td>
			<td class="altbg2"><input type="text" name="keywords" size="60" value="<?php echo $this->_tpl_vars['aField']['keywords']; ?>
">(两个关键字以上用","隔开) <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">新闻简介：</td>
			<td class="altbg2"><input type="text"  name="intro" size="100" value="<?php echo $this->_tpl_vars['aField']['intro']; ?>
"> <span class="starHit">*</span></td>
		</tr>
		<tr>
			<td class="altbg1">是否加红：</td>
			<td class="altbg2"><?php echo smarty_function_html_radios(array('name' => 'isRed','options' => ($this->_tpl_vars['aENUM']),'checked' => $this->_tpl_vars['aField']['isRed']), $this);?>
<span class="starHit">*</span></td>
		</tr>		
		<tr>
			<td class="altbg1">来源：</td>
			<td class="altbg2"><input type="text" id="source" name="source" size="60" value="<?php echo $this->_tpl_vars['aField']['source']; ?>
"></td>
		</tr>
		<tr>
			<td class="altbg1">作者：</td>
			<td class="altbg2"><input type="text"  name="author" size="60" value="<?php echo $this->_tpl_vars['aField']['author']; ?>
"></td>
		</tr>		
		<tr>
			<td class="altbg1">终端页图片：</td>
			<td class="altbg2">
				<input type="file" name="pic" onPropertyChange='preview.src=this.value'>				
				<?php if ($this->_tpl_vars['aField']['pic']): ?> 
					<a href="<?php echo $this->_tpl_vars['__NEWS_PIC'];  echo $this->_tpl_vars['aField']['pic']; ?>
" target="_blank"><img id='preview' src="<?php echo $this->_tpl_vars['__NEWS_PIC'];  echo $this->_tpl_vars['aField']['pic']; ?>
" width="100" height="100" border="0"></a>
					<input name="delPic" type="checkbox" value="1">删除图片
				<?php else: ?>
					<img id='preview' src="/images/no_pic.jpg" width="100" height="100" border="1">
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="altbg1">首页图片：</td>
			<td class="altbg2">
				<input type="file" name="pic_index" onPropertyChange='preview_index.src=this.value'>&nbsp;
				<?php if ($this->_tpl_vars['aField']['pic_index']): ?> 
			<a href="<?php echo $this->_tpl_vars['__NEWS_PIC'];  echo $this->_tpl_vars['aField']['pic_index']; ?>
" target="_blank"><img id='preview_index' src="<?php echo $this->_tpl_vars['__NEWS_PIC'];  echo $this->_tpl_vars['aField']['pic_index']; ?>
" width="86" height="56" border="0"></a>
					<input name="delPic_index" type="checkbox" value="1">删除图片
				<?php else: ?>
					<img id='preview_index' src="/images/no_pic.jpg" width="86" height="56" border="1">(86×56)
				<?php endif; ?>
			</td>
		</tr>			
		
		<?php if (count($_from = (array)$this->_tpl_vars['aNum'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<tr>
			<td class="altbg1">相关附件<?php echo $this->_tpl_vars['key']+1; ?>
：</td>
			<td class="altbg2">			  
				<input type="file" name="attached<?php echo $this->_tpl_vars['key']; ?>
">				
				<?php if ($this->_tpl_vars['aAttached'][$this->_tpl_vars['key']]): ?> 
					<a href="<?php echo $this->_tpl_vars['__NEWS_ATTACHED'];  echo $this->_tpl_vars['aAttached'][$this->_tpl_vars['key']]; ?>
" target="_blank"><?php echo $this->_tpl_vars['aAttached'][$this->_tpl_vars['key']]; ?>
</a><input name="delAttached<?php echo $this->_tpl_vars['key']; ?>
" type="checkbox" value="1">删除
				<?php endif; ?>
			</td>
		</tr>
		<?php endforeach; unset($_from); endif; ?>	
			
		<tr>
			<td class="altbg1">新闻内容：</td>
			<td class="altbg2"><?php echo $this->_tpl_vars['sContent']; ?>
</td>
		</tr>
		<tr>
			<td align="left" class="altbg1"><input type="button" onclick="history.go(-1);" value="返回" class="button"></td>
			<td align="right" class="altbg2">
				<input type="hidden" name="oldPic" value="<?php echo $this->_tpl_vars['aField']['pic']; ?>
">
				<input type="hidden" name="oldPic_index" value="<?php echo $this->_tpl_vars['aField']['pic_index']; ?>
">
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['aField']['id']; ?>
">
				<input type="hidden" name="oldStatus" value="<?php echo $this->_tpl_vars['aField']['status']; ?>
">
				<input type="hidden" name="fileName" value="<?php echo $this->_tpl_vars['aField']['fileName']; ?>
">
				<input type="hidden" name="oldAttached" value="<?php echo $this->_tpl_vars['aField']['attached']; ?>
">
				<input type="submit" name="submit" value=" 提 交 " class="submit">
			</td>
		</tr>
		</form>
</table>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>