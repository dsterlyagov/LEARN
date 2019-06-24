<?php

$basket = [];
$count = 0 ;
const ORDERS_LOG = 'orders.log';


try {
    $db = new PDO("mysql:host=127.0.0.1:3307;dbname=eshop", 'root', '');
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

function insertGoods(){

    $sqlIns = "INSERT INTO catalog (title, author, pubyear, price) VALUES (:title, :author, :pubyear, :price)";
    $st = $db->prepare($sqlIns);
    $st -> bindParam(':title', $title);
    $title = '777';
    $st -> bindParam(':author', $author);
    $author ='Sklyar';
    $st -> bindParam(':pubyear', $pubyear);
    $pubyear = '999';
    $st -> bindParam(':price', $price);
    $price = '1010';

    $st -> execute();}



function selectAllItems(){

    try {
        $db = new PDO("mysql:host=127.0.0.1:3307;dbname=eshop", 'root', '');
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }

    $sqlSelect = "SELECT id, title, author, pubyear, price FROM catalog";
$data = $db->query($sqlSelect)->fetchAll(PDO::FETCH_ASSOC);
return $data;}
//Создание или чтение корзины пользователя Л.р.5
basketInit();

//insertGoods();


