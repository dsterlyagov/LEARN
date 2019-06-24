<?php
class SimpleHouse{
	
	public $model = "";
	public $square = 0;
	public $floors = 0;
	public $color = "none";
	
	// Конструктор класса
	function __construct($model, $square = 0, $floors = 1){
	  $this->model = $model;
	  $this->square = $square;
	  $this->floors = $floors;
	}
	
	function startProject(){
	  echo "Start. Model: {$this->model}\n";
	}
	
	function stopProject(){
	  echo "Stop. Model: {$this->model}\n\n";
	}
	
	function build(){
	  echo "Build. House: {$this->square}x{$this->floors}\n";
	}
	
	function paint(){
	  echo "Paint. Color: {$this->color}\n";
	}
	
}


// Создание класса-наследника
class SuperHouse extends SimpleHouse{
	
	public $fireplace = true;
	public $patio = true;
	
	function fire(){
	  if ($this->fireplace)  
	    echo "Fueled fireplace\n";
	}
}

// Создание класса-наследника
class FabricHouse extends SimpleHouse{
	
	// Перегрузка метода
	function build(){
	  echo "Build. Fabric: {$this->square}x{$this->floors}\n";
	}

}

$fabric = new FabricHouse("B-200-007", 3250, 5);
$fabric->color = "white";
$fabric->startProject();
$fabric->build();
$fabric->paint();
$fabric->stopProject();


?>