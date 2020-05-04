<?php 
$host      = 'localhost'; // Доступ к хосту, обычно - localhost
$user      = 'root'; // Логин от базы данных
$password  = ''; // Пароль от базы данных
$db        = 'registr'; // Имя базы данных

if(!mysql_connect($host, $user, $password)){die('Произошла ошибка при соединение к MySQL');
}if(!mysql_select_db($db)){die('Произошла ошибка при подключение к БД');}
mysql_set_charset("utf8");
$select = "SELECT * FROM my_users WHERE id = '".$_SESSION['user_id']."'";
$q_s = mysql_query($select) or die(mysql_error());
$arr = mysql_fetch_assoc($q_s);
?>