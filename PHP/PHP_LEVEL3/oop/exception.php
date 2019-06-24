<?php
function test($var = false){
  try {
    echo "Start\n";
    if(!$var)
	  throw new Exception('$var is false!');
	echo "Continue\n";
  }catch(Exception $e){
    echo "Exception: " . $e->getMessage() . "\n";
    echo "in file: " . $e->getFile() . "\n";
    echo "on line: " . $e->getLine() . "\n";
  }
  echo "The end\n";
}
var_dump(test(), test(1));

?>