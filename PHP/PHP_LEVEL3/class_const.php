<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 02.12.18
 * Time: 16:04
 */
class Human{
    const HANDS = 2;
    function printHands(){
        return self::HANDS;
   }
}
$bill = new Human();
echo "Количество рук: " . Human::HANDS."</br>";
echo "Количество рук билла: ".  $bill->printHands();