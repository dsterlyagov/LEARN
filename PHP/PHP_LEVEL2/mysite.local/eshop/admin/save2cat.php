<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
	if (isset($_POST['submit'])) {

		// $name = $_POST["name"];
  //   $email = $_POST["email"];
  //   $phone = $_POST["phone"];
  //    $address = $_POST["address"];
     $title = $_POST["title"];
    $author = $_POST["author"];
    $pubyear = $_POST["pubyear"];
     $price = $_POST["price"];
};
if(!addItemToCatalog($title, $author, $pubyear, $price)){   echo 'Произошла ошибка при добавлении товара в каталог'; }else{   header("Location: add2cat.php");   exit; } 