<?php
class Pet{
	public $type = "unknown";
 	public $name = "Petya";
 	function __construct($type, $name){
 		$this->type= $type;
 		$this->name = $name;
 		// Доступ к методу    
 		
 	}
 	function __destruct(){
 		echo "Object destruct";
 	}
 	function drawLine(){  echo "<hr>"; }

 	 	function say($word){  
 	// Доступ к свойству    

 	echo $this->name . " said $word"; 
 	 $this->drawLine();
 	}
 	 
 	 
 }


// Создание объектов, экземпляров класса $cat = new Pet(); $cat = new Pet();
// Изменяем значения свойств $cat->type = "cat"; $cat->name = "Murzik";
$cat = new Pet("cat", "Murzik");
$dog = new Pet("dog", "Tuzik");
 $cat->say("Myau"); // Murzik said Myau 
 $dog->say("Gav");
$vasya = new Pet("human", "Vasya");

?>