//�������´���

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
	    alert("���ڸ�ʽ���������Աߵ�����ѡ�񷢲����ڣ�"); 
	    document.forms[0].publishDate.focus();
	    flag=false;
	    }
    }
   return flag;   
  }
</SCRIPT>



<input id=dc1 readOnly size="10" name="mem_birth">  //id����Ҫ��img�е����Ӧ

<img onClick="popFrame.fPopCalendar('dc1','dc1',event);" value=" ѡ������ " name="caseDealTime" src="./date/date.files/date.gif" >