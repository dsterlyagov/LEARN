<?php
class MyClass{
    private  $arr=[];
    function __set($n, $v){
    $this->arr[$n] =$v;
}
    function __get($n){
       return $this->arr[$n];
    }
}
$obj = new MyClass();
echo $obj->param=100;
 $obj->param;
var_dump($obj->arr);