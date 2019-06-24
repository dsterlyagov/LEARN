<?php
interface ISuperUser{
    function getInfo();
}
abstract class AUser{
    abstract function showInfo();
}


class User  extends AUser{

	public $name;
	public $login;
	public $password;
    public static
	
	function __construct($name, $login, $password){
 		 		$this->name = $name;
 		$this->login = $login;
 		$this->password = $password;
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


$user1 = new User("Vovchik","vof","147852");
$user1->Showinfo();

$user2 = new User("Petik","pik","7777");
$user2->Showinfo();

$user3 = new User("Lucky","Luck","131313");
$user3->Showinfo();

class SuperUser extends User implements ISuperUser{
    public $role;
    function __construct($n,$l,$p,$r){
        parent::__construct($n,$l,$p);
            $this->role=$r;
    }
    function getInfo(){
        //foreach ($this as $key => $value) {
         //   $array[$key] = $value;
        //}
        //return $array;
        return (array)$this; //приведение типов
    }
   }
$user = new SuperUser('Vasya Pupkin', 'vasya', 'root', 'admin');
var_dump($user->getInfo());
?>