<?php
$user = ['name' => 'John',
		 'login' => 'root',
		 'password' => '1234'
];
 $str = serialize($user);
 echo $str;
?>