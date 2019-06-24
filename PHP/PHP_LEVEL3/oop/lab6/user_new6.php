<?php
function __autoload($name){
    require "Classes/$name.class.php";
}
 interface ISuperUser {
 	function  getInfo();

 }

class User extends UserAbstract {
	public static $userCount = 0;
	public $name;
	public $login;
	public $password;
	

	function __construct($name, $login, $password){
 		 		$this->name = $name;
 		$this->login = $login;
 		$this->password = $password;
 		++self::$userCount;
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
	public static $superuserCount = 0;
	public $role;
	function __construct($name, $login, $password, $role) {
		parent::__construct($name, $login, $password);
		$this->role = $role;
		++self::$superuserCount;

	}
	function Showinfo() {
		parent::Showinfo();
		// echo "<hr> Name:{$this->name} <br />";
		// echo "login: {$this->login} <br />";
		// echo "Pass: {$this->password} <br />";
		echo "Role: {$this->role} <br />";
		
	}
	function getInfo() {
		$arr = [];
		foreach ($this as $key => $value) {
			$arr[$key] = $value;
		}
		return $arr;
	}
}

$superUser = new SuperUser("Vasya1","root1","66666","superadmin1");
 $superUser1 = new SuperUser("Vas1","roo1","666","admin1");
 $superUser2 = new SuperUser("V77","r","7777","sup");
  $User1 = new User("Vas1","roo1","666");
  echo $usercount = User::$userCount;
 echo  $superusercount = SuperUser::$superuserCount;
  $usercount-= $superusercount;

echo 'Текущее количество superUserov: ' . SuperUser::$superuserCount . "\n";
echo 'Текущее количество Userov: ' . $usercount . "\n";

?>