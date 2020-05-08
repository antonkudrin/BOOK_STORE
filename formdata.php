<?php
$result = mail ("atlet-2@mail.ru","Получен Комментарий с сайта","
    \nC сайта Книжный магазин был получен Комментарий:
	\nИмя: $_POST[inputText3]
	\nПочта: $_POST[inputEmail3]
	\nСообщение: $_POST[exampleFormControlTextarea1]");
if ($result) {
	echo "<p>Сообщение отправлено успешно!</p>";
}

else{
	echo "<p>Сообщение не отправлено!</p>";
}
?>