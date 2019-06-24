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

// Создание простого дома
$simple = new SimpleHouse("A-100-123", 120, 2);
$simple->color = "red";
$simple->startProject();
$simple->build();
$simple->paint();

$simple->stopProject()

?>