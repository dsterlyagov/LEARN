<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 05.12.18
 * Time: 10:48
 */
class Person{
    private $data = array();
    public function __set($n,$v){
        $this->data[$n]=$v;
    }
 public   function __get($n){
        return $this->n;
    }
}

$x = new Person();
$x->name = 'John';
echo $x->name;