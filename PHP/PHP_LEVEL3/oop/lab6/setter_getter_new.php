<?php
class MyClass{
    private $x,$y;
    function __set($n, $v){
    switch($n){
        case 'x':$this->x=$n; break;
        case 'y':$this->y=$v; break;
        default: throw new Exception('!!!!');
    }
}
    function __get($n){
       return $this->arr[$n];
    }
}
$obj = new MyClass();
echo $obj->y=100;


