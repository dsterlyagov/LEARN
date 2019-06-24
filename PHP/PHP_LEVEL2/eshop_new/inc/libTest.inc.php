<?php
//    $sqlIns = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';
//    $st = $db->prepare($sqlIns);
//    $st->execute('4','4','4','4');
function clearInt($data){
    return abs((int)$data);
}


function saveBasket() {
    global $basket;
    // это переменная которая берется из \inc\config.inc.php
    $basket = base64_encode(serialize($basket));
    // это обработанный, т.е. сериализованный и обработанный base64_encode
    // результат $basket, который инициализируется в basketInit()
    setcookie('basket', $basket, 0x7FFFFFFF);
    // это установка куки по имени $basket со значением полученным строкой
    //ранее
}
function basketInit(){
//функция инициализирующая корзину. Если $_COOKIE['basket'] отсутствует, генерируется случайное
// значение $basket = ['orderid' => uniqid()]; если же корзина есть тогда производится
//процедура обратная той которая производилась с $basket в saveBasket() т.е.  unserialize и base64_decode
     global $basket, $count;
    if(!isset($_COOKIE['basket'])){
        $basket = ['orderid' => uniqid()];
        saveBasket();
    }else{
        $basket = unserialize(base64_decode($_COOKIE['basket']));
        $count = count($basket) - 1;
        //count функция возвращающая количество элементов в массиве если это не массив возвращается 1 в
        // данном случае строка поэтому возвращается 1 итого $count == 0
}
   // saveBasket();
}
//После создания функций корзины вызываем  basketInit()в /inc/config.inc.php
   function add2Basket($id){
    global $basket;
    $basket[$id] = 1;
    saveBasket();
    }

function basketInitModern()
{
    global $basket, $count;
    if (!isset($_COOKIE['basket'])) {
        $basket = ['orderid' => uniqid()];
        saveBasket();
    } else {
        $basket = unserialize(base64_decode($_COOKIE['basket']));
        $count = count($basket) - 1;
        echo $count;
        var_dump($basket) ;
    }
}