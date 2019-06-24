<?php
interface  DB {
	 function connect();
	 function close();
}
class A implements DB {
		function connect() {}
		function close() {}
}

$a = new A;

class Azure{
	function set(DB $obj) {
	echo	$obj->connect();
	
	}
}

?>