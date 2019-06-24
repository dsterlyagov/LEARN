<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 04.12.18
 * Time: 15:42
 */
class SuperUser extends User implements ISuperUser{
    public static $countSUser = 0;
    public $role;
    function __construct($n,$l,$p,$r){
        parent::__construct($n,$l,$p);
        $this->role=$r;
        ++self::$countSUser;
        --self::$countUser;
    }
    function getInfo(){
        //foreach ($this as $key => $value) {
        //   $array[$key] = $value;
        //}
        //return $array;
        return (array)$this; //приведение типов
    }
}