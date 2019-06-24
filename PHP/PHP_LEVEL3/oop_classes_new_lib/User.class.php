<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 04.12.18
 * Time: 15:38
 */

class User  extends AUser{

    public $name;
    public $login;
    public $password;
    public static $countUser = 0;

    function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        ++self::$countUser;
        // Доступ к методу
    }
    function __destruct(){
        echo "{$this->login} destruct";
    }

    function Showinfo() {
        echo "<hr> Name:{$this->name} <br />";
        echo "login: {$this->login} <br />";
        echo "Pass: {$this->password} <br />";

    }

}