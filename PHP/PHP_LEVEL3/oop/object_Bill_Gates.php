<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 02.12.18
 * Time: 13:56
 */
class Human{
    public $name= "Bill Gates";
    public $yearOfBorn = 1955;
   function __construct(){
    //$name = $this->name;
  //  $value = $this->yearOfBorn;
       foreach ($this as $key => $value){
           echo $key . " ".$value."<br/>";
       }
    }
}

(array)$billGates = new Human();
var_dump($billGates);