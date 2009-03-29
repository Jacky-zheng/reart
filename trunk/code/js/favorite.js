function favorite(workid, userid)
{
	if(userid == "0")
	{
		alert("请先登陆");
	}
	else
	{
		var str='workid='+workid+'&userid='+userid;
		Ajax.call('/flow.php?action=favorite', str, addFavoriteResponse, 'POST', 'text');
	}	
}

function addFavoriteResponse(result)
{
	if (result == false)
	{
		alert("添加收藏失败，请联系客服");	
	}
	else if (result == "exist")
	{
		alert("收藏已经存在");	
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
	/*
	document.getElementById('worklist').innerHTML = result;
	*/
	alert("删除成功");
	/*页面跳转*/
	window.location = "/user/favorite.php";
}


function favorite_en(workid, userid)
{
	if(userid == "0")
	{
		alert("first please login");
	}
	else
	{
		var str='workid='+workid+'&userid='+userid;
		Ajax.call('/flow.php?action=favorite', str, addFavoriteResponse_en, 'POST', 'text');
	}	
}

function addFavoriteResponse_en(result)
{
	if (result == false)
	{
		alert("fail");	
	}
	else if (result == "exist")
	{
		alert("the work has been exist");	
	}
	else
	{
		alert("successful");	
	}
}

function delete_favorite_en(workid, userid)
{
	var str='workid='+workid+'&userid='+userid;
	Ajax.call('/flow.php?action=delete', str, delFavoriteResponse_en, 'POST', 'text');
}
function delFavoriteResponse_en(result)
{
	/*
	document.getElementById('worklist').innerHTML = result;
	*/
	alert("successful");
	/*页面跳转*/
	window.location = "/user/favorite.php?language=en";
}

function update_rank()
{
	var ids = document.getElementsByName('works');
	var str = '';
	for (var i=0; i<ids.length; i++)
	{
		//alert(ids[i].id);
		str += (ids[i].id+'='+ids[i].value+'&');
	}
	//str = str.substr(0, -1);
	//alert(str);
	Ajax.call('/flow.php?action=update_rank', str, updateRankResponse, 'POST', 'text');
}
function updateRankResponse(result)
{
	if (result == true)
	{
		alert("更新排序成功");
	}
	else
	{
		alert("更新排序失败");
	}
}