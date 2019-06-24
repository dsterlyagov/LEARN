<?php
class String {
	public $item;
	function __construct($str){
		$this->item = $str;
	}
	function length() {
		return strlen($this->item);
	}
}
$str = new String("Вася");
echo $str->length();
?>