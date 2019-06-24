<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

$name = $_POST["name"];
$order .= $name;
 $email = $_POST["email"];
$order .= "|".$email;
$phone = $_POST["phone"];
$order .= "|".$phone;
 $address = $_POST["address"];
$order .= "|".$address;
 $orderId = $basket['orderid'];
$order .= "|".$orderId;
 $time = mktime();
$order .= "|".$time."\n";

file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND
);
saveOrder($time);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>