<?php
class User {

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

class SuperUser extends User {
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
}

$superUser = new SuperUser("Vasya1","root1","66666","superadmin1");
$superUser->Showinfo();

?>