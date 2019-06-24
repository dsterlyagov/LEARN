<?php
//    $sqlIns = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';
//    $st = $db->prepare($sqlIns);
//    $st->execute('4','4','4','4');
$db = new PDO("mysql:host=127.0.0.1:3307;dbname=eshop", 'root', '');
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
    // Суть переменной $basket это массив в качестве ключей которого хранятся id товаров а в качестве значений 1
    saveBasket();
    }

function myBasket(){

    global $db, $basket;
    //print_r($basket);
    $goods = array_keys($basket);
    //array_keys это массив состоящий из ключей $basket а в $basket  [orderid] => 5c652c862db1e [2] => 1 [3] => 1
    $orderId = array_shift($goods);
    //array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
    //В данном случае он удалит куку [orderid] => 5c652c862db1e и останутся только id товаров
    //Если в массиве goods будет ноль товаров тогда мы заканчиваем код return false
    if(!$goods)
        return false;
    $ids = implode(",", $goods);
    //ids Это id товаров через запятую. ids мы запихиваем в sqlGoods для выборки
    $sqlGoods = "SELECT id, author, title, pubyear, price FROM catalog WHERE id IN ($ids)";
    //$data = $db->query($sqlGoods);
      //  while($row = $data->fetch(PDO::FETCH_ASSOC)) {
            //$row['quantity']= $basket[$row['id']];
         //   $arr[] =  $row['id'];
           // return false;
            //$items = result2Array($data);
    if(!$data = $db->query($sqlGoods) )
        return false;
    $items = result2Array($data);

            return $items;

       // }

}
//Поскольку  данные в таблице корзины отличаются от данных которые идут в select прибавяется еще количество товаров
//мы пишем промежуточную функцию result2Array, которая выведет данные под формат подходящий для корзины
function result2Array($data){
    global $basket;
    $arr = [];


    //$db->query($sqlGoods)->fetchAll(PDO::FETCH_ASSOC) напрямую не работает а через переменную $data нормально
//   $row1 = $data->fetch(PDO::FETCH_ASSOC); Это тестовый код для наглядности
  //  echo $row1['id']; Это тестовый код для наглядности
    while($row = $data->fetch(PDO::FETCH_ASSOC)){
        //Array ( [orderid] => 5c652c862db1e [2] => 1 [3] => 1 [34] => 1 [5] => 1 [6] => 1 )
        // В $basket массив в котором ключ это id товара а значение то есть количество 1
        $row['quantity']= $basket[$row['id']];
        $arr[]= $row;
       // print_r($basket);

    }

        return $arr;
}


function deleteItemFromBasket($id){
    global $basket;
     unset($basket[$id]);

    saveBasket();
}

function saveOrder($dt){
    global $basket;
    global $db;
    $goods = myBasket();
    $sqlInsert =  "INSERT INTO orders (title, author, pubyear, price, quantity, orderid, datetime) VALUES (:title, 
:author, :pubyear, :price, :quantity, :orderid, :datetime)";
    $st = $db->prepare($sqlInsert);
    if(!$st){return false;}
    $st -> bindParam(':title', $title);

    $st -> bindParam(':author', $author);
    ;
    $st -> bindParam(':pubyear', $pubyear);

    $st -> bindParam(':price', $price);
    $st -> bindParam(':quantity', $quantity);
    $st -> bindParam(':orderid', $orderid);
    $st -> bindParam('datetime', $dt);
    foreach ($goods as $item){
                             $title = $item['title'];
                             $author = $item['author'];
                             $pubyear = $item['pubyear'];
                             $price = $item['price'];
                             $quantity = $item['quantity'];
                             $orderid = $basket['orderid'];
              $st -> execute();
    }
    setcookie("basket", "", 1);
    return true;

}
//Создаем функцию getOrders()которая возвращает многомерный массив с информацией
//о всех заказах, включая персональные данные покупателя и список его товаров
function getOrders(){
    global $db;
    if(!is_file(ORDERS_LOG))
        return false;
    /* Получаем в виде массива персональные данные пользователей из файла */
    $orders = file(ORDERS_LOG);
    print_r($orders);
    /* Массив, который будет возвращен функцией */
    $allorders = [];
    foreach ($orders as $order) {
        list($name, $email, $phone, $address, $orderid, $date) = explode("|",
            $order);
        /* Промежуточный массив для хранения информации о конкретном заказе */
        $orderinfo = [];
        /* Сохранение информацию о конкретном пользователе */
       echo $orderinfo["name"] = $name;
        echo $orderinfo["email"] = $email;
        echo  $orderinfo["phone"] = $phone;
        echo  $orderinfo["address"] = $address;
        echo  $orderinfo["orderid"] = $orderid;
        echo $orderinfo["date"] = $date;
        /* SQL-запрос на выборку из таблицы orders всех товаров для конкретного
        покупателя */
        $sql = "SELECT title, author, pubyear, price, quantity
                      FROM orders WHERE orderid = '{$orderid}'";
        /* Получение результата выборки */
      $result = $db->query($sql);
      if(!$result)
        {return false;}

       $items = $result->fetchAll(PDO::FETCH_ASSOC);

        /* Сохранение результата в промежуточном массиве */
        $orderinfo["goods"] = $items;
        /* Добавление промежуточного массива в возвращаемый массив */
      print_r($orderinfo);
        $allorders[] = $orderinfo;
    }
    return $allorders;
}

function logOut(){
    session_destroy();
    $ref1 = "/BORISOV/2018/PHP_LEVEL2/eshop_new/admin/secure/login.php";
    header("Location: $ref1");
    exit;
}