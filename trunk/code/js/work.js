function chooseArtist()
{
	//添加新作者
	if ($('newartist').value == '')
	{
		var id=$("ac").value;
		var str='id='+id;
		Ajax.call('/flow.php?action=getartistname', str, getArtistNameResponse, 'POST', 'text');
	}
	else
	{
		var name=$("newartist").value;
		var str='name='+name;
		Ajax.call('/flow.php?action=addnewartist', str, getArtistNameResponse, 'POST', 'text');
	}
}

function getArtistNameResponse(result)
{
	if (result == false)
	{
		alert("添加作者失败，请稍候再试");	
	}
	else
	{
		//隐藏新添加作者
		$("newartist").value = '';
		$('newast').style.display = 'none';
		//将id添加到隐藏域
		var arr = result.split(',');
		var vl = $("artistCode").value;
		if (vl == '')
		{
			vl = arr[0];
		}
		else
		{
			vl = vl+','+arr[0];
		}
		$("artistCode").value = vl;
		//，并显示作者姓名
		var str = "<table id='tbl_"+arr[0]+"' style='float:left'><tbody><tr><td>"+arr[1]+"</td><td><img src='/images/f2.gif' alt='删除' onclick='delArtist("+arr[0]+");'/>;</td></tr></tbody></table>";
		//new Insertion.After('cfm', str);
		new Insertion.Bottom('artlist', str);
	}
}

function delArtist(id)
{
	//将id从隐藏域中删除，
	var vl = $("artistCode").value;
	vl = vl.replace(id, '');
	vl = vl.replace(',,', ',');
	var ch = vl.substring(vl.length-1, vl.length);
	if (ch == ',')
	{
		vl = vl.substring(0, vl.length-1);
	}
	ch = vl.substring(0, 1);
	if (ch == ',')	
	{
		vl = vl.substring(1, vl.length);
	}
	$("artistCode").value = vl;
	//再删除节点
	deleteElement('tbl_'+id);
}

function checkArtist()
{
	if ($("ac").value == 0)
	{
		$('newast').style.display = '';	
	}
	else
	{
		$('newast').style.display = 'none';
	}
}

function addNewArtist()
{
	alert("ok");	
}

function checkArtName()
{
	var name=$("q").value;
	var str='name='+name;
	Ajax.call('/flow.php?action=checknameexist', str, checkNameExistResponse, 'POST', 'text');	
}

function checkNameExistResponse(result)
{
	if (result == false)
	{
		if(confirm("查找的作者不存在，确认要添加么？") == true)
		{
			window.location = "/admin/artist.php?act=edit&name="+$("q").value;
		}
	}
	else
	{
		var arr = result.split(',');
		if(confirm("查找的作者已存在，编号为："+arr[1]+",要修改么？") == true)
		{
			window.location = "/admin/artist.php?act=edit&id="+arr[0];
		}
	}
}
	
function deleteElement(id)  
{  	
	var p; 
	var d = document.getElementById(id);   
	if (p = d.parentNode)  
	{  
		p.removeChild(d);  
	}  	
}  

function deleteArrayEle(arr, vl)
{
	for (var i=0; i<arr.length; i++)
	{
		if (arr[i] == vl)
		{
			arr.splice(i, 1);
			return;
		}
	}
}