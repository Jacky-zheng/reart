//加入以下代码

<IFRAME 
frameBorder=0 id=popFrame name=popFrame scrolling=no 
src="./date/date.files\popcjs.htm" 
style="BORDER-BOTTOM: 0px ridge; BORDER-LEFT: 0px ridge; BORDER-RIGHT: 0px ridge; BORDER-TOP: 0px ridge; POSITION: absolute; VISIBILITY: hidden; Z-INDEX: 65535"></IFRAME>
<SCRIPT>
document.onclick=function() {document.getElementById("popFrame").style.visibility="hidden";}
function checkForm(){
    var flag=true;
    if (!isEmpty(document.forms[0].publishDate.value)){
            if(!isDate(document.forms[0].publishDate.value)){
	    alert("日期格式不对请点击旁边的日历选择发布日期！"); 
	    document.forms[0].publishDate.focus();
	    flag=false;
	    }
    }
   return flag;   
  }
</SCRIPT>



<input id=dc1 readOnly size="10" name="mem_birth">  //id名称要与img中的相对应

<img onClick="popFrame.fPopCalendar('dc1','dc1',event);" value=" 选择日期 " name="caseDealTime" src="./date/date.files/date.gif" >