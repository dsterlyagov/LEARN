<?php
/* Основные настройки */

define("DB", [
    "DB_HOST_NAME" => "localhost",
    "DB_USER_NAME" => "root",
    "DB_PASSWORD" => "",
    "DB_DATABASE" => "gbook"
]);
 $link =mysqli_connect(DB[DB_HOST_NAME],   DB[DB_USER_NAME],  DB[DB_PASSWORD],  DB[DB_DATABASE]);
 if ($link) {
 	echo mysqli_connect_errno();
 	echo "<br />";
 	echo mysqli_connect_error();
 	error_reporting(0);

 }
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// function form_submitted($form_name=false){
//   if(!isset($_POST['submitted'])){ // был ли вообще сабмит
//     return false; //неа, завершаем
//   }
//   if($form_name && $_POST['submitted']!=$form_name){ //если проверяется конкретная форма, была ли отправлена именно она?
//     return false;//нет, завершаем
//   }
//   return true;//все, ок.
// }

if ($_POST['submit']) {

		$name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];
};
	// $name = $_POST["name"];
	//     $email = $_POST["email"];
	//     $msg = $_POST["msg"];
$ins = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
$res = mysqli_query($link,$ins);
if (mysqli_query($link,$ins)===TRUE) {
	printf("Вставка записи произошла.\n");
}	; 

// $link = mysqli_connect('localhost', 'root', '', 'web');

/* Основные настройки */

/* Сохранение записи в БД */

/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit"  value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */

/* Вывод записей из БД */
?>