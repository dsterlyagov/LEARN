<?php
abstract class UserAbstract {
	abstract function showInfo();

}
 interface ISuperUser {
 	function  getInfo();

 }

class User extends UserAbstract {

	public $name;
	public $login;
	public $password;
	
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

class SuperUser extends User implements ISuperUser {
	public $role;
	function __construct($name, $login, $password, $role) {
		parent::__construct($name, $login, $password);
		$this->role = $role;

	}
	function Showinfo() {
		parent::Showinfo();
		// echo "<hr> Name:{$this->name} <br />";
		// echo "login: {$this->login} <br />";
		// echo "Pass: {$this->password} <br />";
		echo "Role: {$this->role} <br />";
		
	}
	function getInfo() {
		$arr = array();
		foreach ($this as $key => $value) {
			$arr[$key] = $value;
		}
		return $arr;
	}
}

$superUser = new SuperUser("Vasya1","root1","66666","superadmin1");
 print_r ($superUser->getInfo());

?>