<?php
$link = mysqli_connect('localhost', 'root', '', 'web');
if(!$link) echo "Ура заработало";
// $res = mysqli_query($link, "SET NAMES 'utf-8'");
// if(!$res) {
// 	echo mysqli_error($link);
// }
$result = mysqli_query($link, "SELECT * FROM teachers");
mysqli_close($link);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
// echo print_r($row);

foreach ($row as $value=>$key) {
 echo "$key <br>";


}
?>