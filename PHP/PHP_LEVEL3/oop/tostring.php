<?php
class MyClass{}

$obj = new MyClass();
echo obj; // Ошибка!

class MyClass{
  
  function __toString(){
    return 'Это объект, экземпляр класса ' . __CLASS__;
  }
  
}

$obj = new MyClass();
echo obj; // Это объект, экземпляр класса MyCLASS


?>