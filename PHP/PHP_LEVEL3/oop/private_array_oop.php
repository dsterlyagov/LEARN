<?php
class MyClass{
	private $x, $y;
	function __set($n, $v) {
		switch($n){
			case "x": $this->x = $v; break;
			case "y": $this->y = $v; break;
			default: throw new Exception('!!!!!');
		}
		echo $n.":".$v;
	}

}


$obj = new MyClass();
$obj->x = 10;



?>