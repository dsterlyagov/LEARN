<?php
class Pet{
	public $type = "unknown";
 	public $name;
 	 	function say($word){  
 	// Доступ к свойству    
 	echo $this->name . " said $word";  
 	// Доступ к методу    
 	$this->drawLine(); 
 }
function drawLine(){  echo "<hr>"; }

}
// Создание объектов, экземпляров класса $cat = new Pet(); $cat = new Pet();
// Изменяем значения свойств $cat->type = "cat"; $cat->name = "Murzik";
$cat = new Pet();
$dog = new Pet();
$dog->type = "dog";
 $dog->name = "Tuzik";
$cat->type = "cat";
 $cat->name = "Murzik"; 
 $cat->say("Myau"); // Murzik said Myau 
 $dog->say("Gav");

?>