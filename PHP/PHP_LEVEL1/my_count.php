<?php
 function my_count($b) {

if(is_null($b)) return 0;
if(!is_array($b)) return 1;
	$cnt=0;
  foreach ($b as $v) {
$cnt++;
  }


 	return $cnt;
 }
 $leftMenu = [
          ["link" =>"Домой", "href" =>"index.php"],
          ["link" =>"О нас", "href" =>"about.php"],
          ["link" =>"Контакты", "href" =>"contact.php"],
          ["link" =>"Таблица умножения", "href" =>"table.php"],
          ["link" =>"Калькулятор", "href" =>"calc.php"],
];

$c= 24;
	echo my_count($c);
 	echo my_count($leftMenu);
?>