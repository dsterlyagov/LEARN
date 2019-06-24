<?php
// define("DB", [
//     "DB_HOST_NAME" => "localhost",
//     "DB_USER_NAME" => "root",
//     "DB_PASSWORD" => "",
//     "DB_DATABASE" => "eshop"
// ]);
define('ORDERS_LOG', 'orders.log');
 // $link =mysqli_connect(DB[DB_HOST_NAME],   DB[DB_USER_NAME],  DB[DB_PASSWORD],  DB[DB_DATABASE]);
 $link = mysqli_connect("localhost",   "root",  "",  "eshop");
 //  $basket = [];
 // $count = 0;
 
 if ($link) {
 	echo mysqli_connect_errno();
 	echo "<br />";
 	echo mysqli_connect_error();
 	error_reporting(0);

 }
 ?>