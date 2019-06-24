<?php

// function addItemToCatalog($title, $author, $pubyear, $price) {
// $sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';


// }
// $sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';
// if(!$stmt = mysqli_prepare($link, $sql))
// 	return false;
// mysqli_stmt_bind_param($stmt,"ssii",$title, $author, $pubyear, $price);
// mysqli_stmt_execute($stmt);
// mysqli_stmt_close($stmt);
// return true;

function addItemToCatalog($title, $author, $pubyear, $price) {
$sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES ($title, $author, $pubyear, $price)';
global $link;
$res = mysqli_query($link, $sql);
if (!res) {
	echo 'Товар неeee добавлен';
}
$row = mysqli_fetch_assoc($res);
}
