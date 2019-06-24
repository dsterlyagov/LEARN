<?php
class User {

	public $name;
	public $login;
	public $password;
	
	function Showinfo() {
		echo "<hr> Name:{$this->name}\n\t";
		echo "login: {$this->login}\n\t";
		echo "Pass: {$this->password}\n\t";
		
	}
}

$user1 = new User();
$user1->name = "Ivan Petrov";
$user1->login = "ivanp";
$user1->password = "1111";
$user1->Showinfo();

$user2 = new User();
$user2->name = "Sidor Petrovich";
$user2->login = "spetr";
$user2->password = "1453";
$user2->Showinfo();

$user3 = new User();
$user3->name = "Vova Fofanov";
$user3->login = "vovf";
$user3->password = "777";
$user3->Showinfo();
?>