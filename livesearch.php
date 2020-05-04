<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");
$x=$xmlDoc->getElementsByTagName('link');
$q=$_GET["q"];
mb_internal_encoding("UTF-8");
if (mb_strlen($q)>=3) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target=''>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }else{$hint=$hint . "<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target=''>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";}}}}}
if ($hint=="" && ( mb_strlen($q)>=3 )) {$response="<p>нет совпадений</p>";}else{$response=$hint;}echo $response;
?>