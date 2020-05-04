<?php header('Content-Type: text/html; charset=utf-8');?>
<html>
<head>
<title>Админка</title>
<meta http-equiv='content-type' content='text/html; charset=utf-8'>
<style type="text/css">table{width:100%;font-size:12px;}tr{display:block;margin:0 0 2px;}td span{color:blue;}.td_u{display:inline-block;width:34px;}.new{color:blue;font-size:12px;}</style>
</head>
<body>
<p style="text-align:center;margin:20px auto;font-size:20px;">Админ Панель</p><form method="post"><input type="text" name="find" value=""><input type="submit" name="search" value="Поиск"></form>
<?php 
require_once "connect.php";if(isset($_POST['search'])){
$search=trim($_POST['find']);$query = "SELECT * FROM `my_users` WHERE username LIKE '%$search%' ORDER by id DESC";$result = mysql_query($query);
echo '<table class="one" border="1" cellpadding="4">';echo '<tr><td width="20px"><span>ID</span></td><td width="160px"><span>E-mail</span></td><td width="160px"><span>Имя</span></td></tr>';
while($row = mysql_fetch_array($result)){echo '<tr><td width="20px"><a href="?id=',$row['id'],'">',$row['id'],'</a></td><td width="160px">',$row['username'],'</td><td width="160px">',$row['names'],'</td></tr>';}exit();}
if(!empty($_GET['id'])){$query="SELECT * FROM `my_users` WHERE id='$_GET[id]'";$result = mysql_query($query);$row = mysql_fetch_array($result);}
if(isset($_POST['insert'])){$query="INSERT INTO `my_users` (username,names) VALUES ('$_POST[username]','$_POST[names]')";mysql_query($query);}
if(isset($_POST['edit'])){$query="UPDATE `my_users` SET username='$_POST[username]',names='$_POST[names]'  WHERE id='$_POST[id]'";$result = mysql_query($query);unset($row);}
if(isset($_POST['delete'])){$query="DELETE FROM `my_users` WHERE id='$_POST[id]'";$result = mysql_query($query);unset($row);}
echo<<<HERE
<form method="post"><table border="0"><tr><td>id</td><td>$row[id]</td></tr><tr><td><span>E-mail:</span><br /><input type="text" size="40" name="username" value='$row[username]'></td></tr><tr><td><span>Имя пользователя:</span><br /><input type="text" size="40" name="names" value='$row[names]'></td></tr><input type="hidden" name="id" value='$_GET[id]'><tr><td>
HERE;
if(!empty($_GET['id'])){echo ' <input type="submit" name="edit" value="Сохранить">'; echo ' <input type="submit" name="delete" value="Удалить">';
}else{echo '<input type="submit" name="insert" value="Добавить">';}echo '</td></tr></table></form>';
?>
</body></html>