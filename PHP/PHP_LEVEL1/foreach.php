<?php
$arr = ["name" =>"John",
		"login" => "root",
		"age"	=> 25
		];
		 foreach ($arr as $val) {

		 	echo "$val\n";
		 };

		foreach ($arr as $key => $val) {

		 	echo "$key : $val\n";
		 }

		 	$nums = [1,2,3,4,5];
		 	 foreach ($nums as $v) {

		 	 	// echo "$v*=10";
		 	 }
		 	 var_dump ($nums);


		 	$nums = [1,2,3,4,5];
		 	 foreach ($nums as &$v) {

		 	 	$v*=10;
		 	 }

		 	 	var_dump ($nums);
?>