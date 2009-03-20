/* 公用ajax函数 */

/* start地区 */
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

function searchCounty()
{	
	var field = "h_county";
	waitResult(field,"");
	var iCityID = $F('cityID');
	var url = "/js/area.php?act=searchCounty&cityID="+iCityID;
	//alert(url);
	var pars = 'cityID=' + iCityID;	
	var myAjax = new Ajax.Request(
                    url,
                    {method: 'get', parameters: pars, onComplete: showResult_county});	
	
}


//show ajax return result

function showResult_province(originalRequest)
{	
	var response = originalRequest.responseText;
	$(h_province).innerHTML = response;
	$(h_city).innerHTML = "";
	$(h_county).innerHTML = "";
}

function showResult_city(originalRequest)
{	
	var response = originalRequest.responseText;
	$(h_city).innerHTML = response;
	$(h_county).innerHTML = "";
}

function showResult_county(originalRequest)
{
	var response = originalRequest.responseText;
	$(h_county).innerHTML = response;
}


//wait the ajax's return information
function waitResult(field,msg)
{
	$(field).innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+msg;	
}


/** end 地区 **/





/** start 广告位 **/

function loadWebUrl(id,x)  // x＝0 表示总站； x=1表示分站
{
	waitResult("webUrl","<br>正在读取……");
	var url = "/js/channel.php?act=loadWebUrl&flag=1&channelID="+id+"&isAgent="+x;
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

function loadSmallChannel(id,flag,x) // x＝0 表示总站； x=1表示分站
{	
	waitResult("smallCat","<br>正在读取小类……");
	var url = "/js/channel.php?act=loadSmallChannel&parentID="+id+"&flag="+flag+"&isAgent="+x;
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

function showInput(iID,sName,x) // x＝0 表示总站； x=1表示分站
{
	$("s_"+iID).style.display="none";
	$("n_"+iID).innerHTML = "<input type='text' style='width:120px' value='"+sName+"' id='input_"+iID+"'>&nbsp;<input type='button' onclick='submitInput("+iID+","+ x +")' value='提交'><span id='hit'></span>";
}

function submitInput(iID,x) // x＝0 表示总站； x=1表示分站
{

	var v = $F('input_'+iID);
	var url = "/js/channel.php?act=modifySaveWebURLName&webURLID="+iID+"&isAgent="+x;
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

/** end 广告位 **/


// 全选或反选
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

// 判断是否选中

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
	  alert ("请先选择！");
	  return false;
	}
	return true;
}
