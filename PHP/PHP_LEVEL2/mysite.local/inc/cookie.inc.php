<?php
$visitCounter =0;
if (isset($_COOKIE['visitCounter'])) $visitCounter = $_COOKIE['visitCounter']; 
$visitCounter++;
$lastVisit = "";
if(isset($_COOKIE['lastVisit'])) $lastVisit = $_COOKIE['lastVisit'];
$lastVisit = date("Y-m-d H:i:s", $_COOKIE['lastVisit']);
if(date("Y-m-d", $_COOKIE['lastVisit'])!= date("Y-m-d")) {
setcookie('visitCounter', $visitCounter, 0x7FFFFFFF);
 setcookie('lastVisit', time(), 0x7FFFFFFF);}





?>
