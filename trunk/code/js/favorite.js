function favorite(workid, userid)
{/*
	if(userid == "")
	{
		alert("please login");
	}
	else
	{
		alert("please fa");
	}
	*/
	var str='workid='+workid+'&userid='+userid;
	Ajax.call('/flow.php?action=favorite', str, addFavoriteResponse, 'POST', 'text');
}

function addFavoriteResponse(result)
{
	if (result == false)
	{
		alert("添加收藏失败，请联系客服");	
	}
	else
	{
		alert("添加收藏成功");	
	}
}

function delete_favorite(workid, userid)
{
	var str='workid='+workid+'&userid='+userid;
	Ajax.call('/flow.php?action=delete', str, delFavoriteResponse, 'POST', 'text');
}
function delFavoriteResponse(result)
{
	document.getElementById('worklist').innerHTML = result;
}