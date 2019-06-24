<?php
abstract class DB {
	abstract function connect();
	abstract function close();
}
class a extends DB {
		function connect() {}
		function close() {}
}

$A = new a;

class Azure{
	function set(DB $obj) {
	echo	$obj->connect();
	
	}
}

?>