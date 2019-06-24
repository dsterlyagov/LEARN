<?php
// class User {
// 	public $name;
// 	public $login;
// 	public $password;
// 	function Showinfo() {
// 		echo "You user ".$this->name."используете IP".$_SERVER['REMOTE_ADDR']."Ваш логин".$this->login;
		
// 	}
	
// 	}


// $user1 = new User();
// $user2 = new User();
// $user1->name = "demetrius12";
// $user2->name = "demetrius12";
// $user1->login = "root";
// $user2->login = "admin";
// $user1->Showinfo();
// $user2->Showinfo();

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
	function Showinfo() {
		echo "You name ".$this->name."  IP".$_SERVER['REMOTE_ADDR']."Your login".$this->login;
		$this->AddDrawLine();
	}
		function AddDrawLine(){
		echo "<hr />";
	}
	function __destruct(){  
			
		echo $this->name." удален"; }


	}

// 	


class SuperUser extends User1{

	public $role;
	function __construct($name, $login, $password, $role){
		$this->role = $role;
		parent::__construct($name, $login, $password);
		// $this->Showinfo();
	}
	function Showinfo() {
		parent::Showinfo();
		echo "<br />".$this->role;
		$this->AddDrawLine();
	}
} 

$superUser1 = new SuperUser("Vasya","root","77777","superadmin");
?>