<?php
/**
 * ????????
 *  2006.12
 */
if(!defined("IN_CN315")) {
	echo "<script>location.href='http://www.cn315.cc';</script>";
}

class favorite
{
	/**
	 * ÊÕ²Ø×÷Æ·
	 *
	 * @param array $params
	 * start:
	 * pagesize:
	 * @return array
	 */
	function addFavorite($workid, $userid)
	{
		global $db;
		
		$arr = array(
			'workID' =>  $workid,	
			'addDate' =>  date("Y-m-d H:i:s"),	
			'userID' =>  $userid,		
		);
		$id = $db->insert("workfavorite", $arr);
		return $id;
	}
}
?>