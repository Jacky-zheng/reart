/* ����ajax���� */

/* start���� */
function searchProvince()
{		
	var field = "h_province";
	waitResult(field,"");
	var iCountryID = $F('countryID');
	var url = "/js/area.php?act=searchCountry&countryID="+iCountryID;
	//alert(url);
	var pars = 'countryID=' + iCountryID;	
	var myAjax = new Ajax.Request(
                    url,
                    {method: 'get', parameters: pars, onComplete: showResult_province});	
	
}

function searchCity()
{	
	var field = "h_city";
	waitResult(field,"");
	var iProvinceID = $F('provinceID');
	var url = "/js/area.php?act=searchCity&provinceID="+iProvinceID;
	//alert(url);
	var pars = 'provinceID=' + iProvinceID;	
	var myAjax = new Ajax.Request(
                    url,
                    {method: 'get', parameters: pars, onComplete: showResult_city});	
	
}

//show ajax return result

function showResult_province(originalRequest)
{	
	var response = originalRequest.responseText;
	$(h_province).innerHTML = response;
	$(h_city).innerHTML = "";
}

function showResult_city(originalRequest)
{	
	var response = originalRequest.responseText;
	$(h_city).innerHTML = response;
}

//wait the ajax's return information
function waitResult(field,msg)
{
	$(field).innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+msg;	
}


/** end ���� **/





/** start ���λ **/

function loadWebUrl(id,x)  // x��0 ��ʾ��վ�� x=1��ʾ��վ
{
	waitResult("webUrl","<br>���ڶ�ȡ����");
	var url = "/js/channel.php?act=loadWebUrl&flag=1&channelID="+id+"&x="+x;
	//alert(url);
	var pars = 'parentID='+id;	
	var myAjax = new Ajax.Request(
                    url,
                    {method: 'get', parameters: pars, onComplete: showResult_webUrl});	
	//$('webUrl_'+id).className = 'bigCatNew';
}

//show ajax return result
function showResult_webUrl(originalRequest)
{
	var response = originalRequest.responseText;
	$('webUrl').innerHTML = response;
}

function loadSmallChannel(id,flag,x) // x��0 ��ʾ��վ�� x=1��ʾ��վ
{	
	waitResult("smallCat","<br>���ڶ�ȡС�࡭��");
	var url = "/js/channel.php?act=loadSmallChannel&parentID="+id+"&flag="+flag+"&x="+x;
	//alert(url);
	var pars = 'parentID='+id;	
	var myAjax = new Ajax.Request(
                    url,
                    {method: 'get', parameters: pars, onComplete: showResult_smallChannel});
	//$('cat_'+id).className = 'bigCatNew';
}

//show ajax return result
function showResult_smallChannel(originalRequest)
{
	var response = originalRequest.responseText;
	$('smallCat').innerHTML = response;
}

function showInput(iID,sName,x) // x��0 ��ʾ��վ�� x=1��ʾ��վ
{
	$("s_"+iID).style.display="none";
	$("n_"+iID).innerHTML = "<input type='text' style='width:120px' value='"+sName+"' id='input_"+iID+"'>&nbsp;<input type='button' onclick='submitInput("+iID+","+ x +")' value='�ύ'><span id='hit'></span>";
}

function submitInput(iID,x) // x��0 ��ʾ��վ�� x=1��ʾ��վ
{

	var v = $F('input_'+iID);
	var url = "/js/channel.php?act=modifySaveWebURLName&webURLID="+iID+"&x="+x;
	//alert(url);
	var pars = 'v='+v;	
	var myAjax = new Ajax.Request(
                  url,
                   {method: 'get', parameters: pars, onComplete: showSubmitResult});	
}

function showSubmitResult(originalRequest)
{
	var response = originalRequest.responseText;
	//alert(response);
	$('hit').innerHTML = response;
}

/** end ���λ **/


// ȫѡ��ѡ
function chkall()  
{
	var put=document.all.tags("input");
	for (i=0;i<put.length;i++) 
	{
		if (put[i].type=="checkbox" && put[i].disabled==false )
		{
		  put[i].checked=(put[i].checked) ? false : true;		  
		}	  
	}
}

// �ж��Ƿ�ѡ��

function judge()
{
	var put=document.all.tags("input");
	
	for (i=0;i<put.length;i++) 
	{
	  if(put[i].name=="id[]" && put[i].checked) break;
    }

//alert(i);
	
	if(i>=put.length)
	{
	  alert ("����ѡ��");
	  return false;
	}
	return true;
}
