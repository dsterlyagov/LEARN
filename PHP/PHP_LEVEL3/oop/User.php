<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 30.11.18
 * Time: 22:55
 */
class User{
    public $name;
    public $login;
    public $password;
    function showInfo(){
        echo 'Это '.$this->name;
        echo '<br> Его логин '.$this->login;
        echo '<br> Пароль '.$this->password;
    }

}

$user1 = new User();
$user1->name = 'Вася';
$user1->login = 'vasya';
$user1->password = '66';
$user1->showInfo();