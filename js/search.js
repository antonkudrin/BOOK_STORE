function showResult(str) {if (str.length==0) {document.getElementById("livesearch").innerHTML="";return;}
if (window.XMLHttpRequest) {xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
 xmlhttp.onreadystatechange=function() {if (xmlhttp.readyState==4 && xmlhttp.status==200) {document.getElementById("livesearch").innerHTML=xmlhttp.responseText;}}
 xmlhttp.open("GET","livesearch.php?q="+str,true); xmlhttp.send();}
 