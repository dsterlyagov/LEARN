<?php
class MyClass{
	// function __set($n, $v) {
	// 	echo $n.":".$v;

	// }


function __get($n) {
		echo $n;

	}

}
$obj = new MyClass();
$obj->param = 100;



?>