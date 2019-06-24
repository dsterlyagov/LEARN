<?php
class User {

	public $name;
	public $login;
	public $password;
	
	function __construct($name, $login, $password){
 		 		$this->name = $name;
 		$this->login = $login;
 		$this->password = $password;
        $this->Showinfo();
 		// Доступ к методу    
 }
    function __clone(){
        $this->name = 'Guest';
        $this->login = 'guest';
        $this->password = 'password';
        $this->Showinfo();
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

$user4 = clone $user2;
$user4->Showinfo();
?>