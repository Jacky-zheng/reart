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
		alert("����ղ�ʧ�ܣ�����ϵ�ͷ�");	
	}
	else
	{
		alert("����ղسɹ�");	
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