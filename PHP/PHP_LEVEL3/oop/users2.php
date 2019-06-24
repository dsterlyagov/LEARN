<?php
interface ISuperUser{
	 function getInfo();

}
abstract class UserAbstract{
	abstract function showInfo();
}

class User1 {
	public $name;
	public $login;
	public $password;
	function __construct($name, $login, $password){
		$this->login = $login;
		$this->password = $password;
		$this->name = $name;
		$this->Showinfo();
	}
	 function Showinfo($name) {
		echo "You name ".$this->name."  IP".$_SERVER['REMOTE_ADDR']."Your login".$this->login;
		$this->AddDrawLine();
	}
		function AddDrawLine(){
		echo "<hr />";
	}
	function __destruct(){  
			
		echo $this->name." удален"; }


	}

class SuperUser extends User1 {

	public $role;
	function __construct($name, $login, $password, $role){
		parent::__construct($name, $login, $password);
		$this->role = $role;
		// $this->Showinfo();
	}
	function Showinfo() {
		parent::Showinfo();
		echo "<br />".$this->role;
		$this->AddDrawLine();
	$this->getInfo();
	}

	function getInfo(){
		$this->login = $login;
		echo $login;
	}

	
} 

$us_i = new SuperUser("Vasya","root","77777","superadmin");

$us_i1 = new SuperUser("Vasya1","root1","66666","superadmin1");
$us_i1->login = "Vova";
 $us_i1->getInfo();
 



?>