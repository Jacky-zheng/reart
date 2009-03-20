<?php
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.ts918.com';</script>";
}

/**
 * Enter description here...
 *
 */
class template{		

	
	function template($sDefaultTemplate, $sDIR = "templates") {
		require_once(ROOT."./class//smarty/Smarty.class.php");		
		$this->__moTPL = new Smarty();
		$this->__moTPL->template_dir 	= ROOT."./".$sDIR."/".$sDefaultTemplate;
		$this->__moTPL->compile_dir		= ROOT."/templates_c";		
		$this->__moTPL->compile_check	= true;
		$this->__moTPL->left_delimiter	= "{";
		$this->__moTPL->right_delimiter	= "}";	
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sVar
	 * @param unknown_type $sValue
	 */
	function assign($sVar, $sValue) 
	{
		$this->__moTPL->assign($sVar, $sValue);
	}
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $sTPL
	 */
	function display($sTPL) {		
		//传递一些公共变变量
		$this->__moTPL->assign("__ADMINTITLE",__ADMINTITLE);  // 后台title
		$this->__moTPL->assign("__WEBNAME",__WEBNAME); // 前台页面title
		$this->__moTPL->assign("__DEFAULT_TEMPLATE", __DEFAULT_TEMPLATE);
		
		// 会员中心
		if(isset($_COOKIE["xzx_trueName"])) $this->__moTPL->assign("__M_TRUENAME", $_COOKIE["xzx_trueName"]);
		if(isset($_COOKIE["xzx_isVip"])) $this->__moTPL->assign("__M_ISVIP", $_COOKIE["xzx_isVip"]);
		if(isset($_COOKIE["xzx_userName"])) $this->__moTPL->assign("__M_USERNAME", $_COOKIE["xzx_userName"]);
		
		// 总后台
		if(isset($_SESSION["xzx_trueName"])) $this->__moTPL->assign("__TRUENAME", $_SESSION["xzx_trueName"]);
		
		// 代理后台
		if(isset($_SESSION["agent_trueName"])) $this->__moTPL->assign("__AGENT_TRUENAME", $_SESSION["agent_trueName"]);		
		


		$sTplPath = $this->__moTPL->template_dir."/".$sTPL;
		$this->__moTPL->display($sTplPath);
	}
	
	/**
	 * 清除缓存文件
	 *
	 * @return unknown
	 */
	function clear_cache()
	{
		return $this->__moTPL->clear_cache();
	}
	
	function fetch($sTPL)
	{
		$this->__moTPL->assign("__ADMINTITLE",__ADMINTITLE);
		$this->__moTPL->assign("__DEFAULT_TEMPLATE", __DEFAULT_TEMPLATE);
		$this->__moTPL->assign("__TRUENAME", $_SESSION["xzx_trueName"]);		
		$sTplPath = $this->__moTPL->template_dir."/".$sTPL;
		$this->__moTPL->fetch($sTplPath);
	}
}
?>