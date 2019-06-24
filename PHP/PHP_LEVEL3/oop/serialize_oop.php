<?php
 // Сериализация объекта

class User{
	private $login;
	private $password;
	private $params = [];
		
	function __construct($login, $password){
		$this->login = $login;
		$this->password = $password;
		$this->params = $this->getUser();
	}
	
	function getUser(){
	 // Что-то делаем
	 // Например, возвращаем массив данных пользователя
	}
	
	// Вызывается перед сериализацией
	function __sleep(){
	  return ['login', 'password'];
	}
	
	// Вызывается после сериализации
	function __wakeup(){
	  $this->params = $this->getUser();
	}
}

$obj = new User("john", "1234");
$str = serialize($obj);
unset($obj);
$obj = unserialize($str);



?>