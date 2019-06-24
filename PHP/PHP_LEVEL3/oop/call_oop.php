<?php
 class MyClass{


 function __call($name, $args){
    echo "Call method '$name' with arguments: " . implode(', ', $args);
  }

  static function __callStatic($name, $args){
    echo "Call static method '$name' with arguments: " . implode(', ', $args);  
  }

}
$obj = new MyClass();
$obj->func(10, 20);  // Call method 'func' width arguments: 10, 20
MyClass::staticFunc(10, 20);  // Call static method 'staticFunc' width arguments: 10, 20


?>