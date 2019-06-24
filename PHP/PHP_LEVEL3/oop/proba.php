<?php
abstract class UserAbstract {
    public $name;
    public $login;
    public $password;
    function __construct($name, $login, $password){
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->Showinfo();
    }

    abstract function showInfo();
}

class User extends UserAbstract {
    public $role;
    function __construct($name, $login, $password, $role){
        $this->role = $role;
        parent::__construct($name, $login, $password);
        // $this->Showinfo();
    }
    function Showinfo() {echo "You name ".$this->name."  IP".$_SERVER['REMOTE_ADDR']."Your login".$this->login."<br />".$this->role;

    }

    function Show(){
        $arr =[];
        foreach ($this as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }
}

$user = new User('vasya','vas',1,'admin');
var_dump($user->Show());