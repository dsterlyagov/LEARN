<?php
function say($name, $h) {

	echo "<h$h> Hello, $name!</h$h>";
}
say("John",1);
say("Mike",3);

function say1($name) {
echo "<h1>Hello, $name!</h1>";
global $name;
$name = "Vasya";
}

say1("John");
$name = "Mike";
say1($name);
echo $name;

function foo() {
     static $x=0;
     $x++;
     echo "$x раз";

}
foo();
foo();
foo();
?>