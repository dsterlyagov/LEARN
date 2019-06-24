<?php
interface  ISuperUser {
	 getInfo();

}

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
		
}

class SuperUser extends User, implements ISuperUser{
getInfo() 
	
}
$superUser1 = new User("Vasya","root","77777","superadmin");
?>