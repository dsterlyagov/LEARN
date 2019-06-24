<?php
class Pet {
	public $name;
	public $type = "unknown";
	function Say($word) {
		echo $this->name. "said $word\n";
		$this->AddDrawLine();
	}
	function AddDrawLine(){
		echo "<hr />";
	}
}

$cat = new Pet();
$dog = new Pet;
$cat->name = "Murzik";
$cat->type = "cat";
$dog->name = "Tuzik";
$dog->type = "dog";
$cat->Say("Muyau");
$dog->Say("Gav");

class Pet1 {
	public $name;
	public $type = "unknown";
	function __construct($name, $type, $word){
		$this->name = $name;
		$this->type = $type;
		$this->word = $word;
		$this->Say($word);
	}
	function Say($word) {
		echo $this->name. "said $word\n";
		$this->AddDrawLine();
	}
	function AddDrawLine(){
		echo "<hr />";
	}
}
$cat = new Pet1("Murzik","cat" ,"Mizqq");
?>