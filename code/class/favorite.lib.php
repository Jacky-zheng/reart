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
	 * 收藏作品
	 *
	 * @param array $params
	 * start:
	 * pagesize:
	 * @return array
	 */
	function addFavorite($workid, $userid)
	{
		global $db;
		$sql = "select count(*) as cnt from workfavorite where workID='$workid' and userID='$userid'";
		$res = $db->getRecordSet($sql);
		if ($res[0]['cnt'] > 0)
		{
			return "exist";
		}
		else
		{
			$arr = array(
				'workID' =>  $workid,	
				'addDate' =>  date("Y-m-d H:i:s"),	
				'userID' =>  $userid,		
			);
			$id = $db->insert("workfavorite", $arr);
			return $id;
		}
	}

	function delFavorite($workid, $userid)
	{
		global $db;
		
		$str = "workID='".$workid."' and userID='".$userid."'";
		$res = $db->delete("workfavorite", $str);
		return $res;
	}
}
?>