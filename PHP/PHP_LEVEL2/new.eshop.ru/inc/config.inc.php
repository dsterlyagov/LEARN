<?php
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASS = '';
const DB_NAME = 'eshop';
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if(!$link) {
echo "Ошибка соединения";

}
const ORDERS_LOG = 'orders.log';
 $basket = [];
 $count = 0;
basketInit();
