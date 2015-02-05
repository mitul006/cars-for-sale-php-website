function ajaxFunction()
  {
  var xmlHttp;
  try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
  catch (e)
    {
    // Internet Explorer
    try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
    catch (e)
      {
      try
        {
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      catch (e)
        {
        alert("Your browser does not support AJAX!");
        return false;
        }
      }
    }
  }

var xmlHttp
function sugestija(naziv)
{ 
if (naziv.length==0)
 { 
 document.getElementById("livesearch").innerHTML="";
 document.getElementById("livesearch").style.border="0px";
 return
 }
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
 
var url="suggest.php"
url=url+"?unos="+naziv
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged() 
{ 

if (xmlHttp.readyState==4)
 { 
 document.getElementById("livesearch").innerHTML=xmlHttp.responseText;
 //document.getElementById("livesearch").style.border="1px solid";
 document.getElementById("livesearch").style.display="block";

 } 
}