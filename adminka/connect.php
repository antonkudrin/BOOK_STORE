<?php
  $DBASE = mysql_connect("localhost", "root", "") or die("Could not connect: " . mysql_error());
  mysql_select_db("registr") or die("Could not select database");
  // проверяем кодировку
$charset = mysql_client_encoding($DBASE);
// устанавливаем кодировку
mysql_set_charset("utf8");
// еще раз проверяем кодировку
$charset = mysql_client_encoding($DBASE);
?>