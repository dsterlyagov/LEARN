<?php

function __autoload($name){
    include "../oop_classes_new_lib/$name.class.php";

}

$user1 = new User("Vovchik","vof","147852");
$user1->Showinfo();

$user2 = new User("Petik","pik","7777");
$user2->Showinfo();

$user3 = new User("Lucky","Luck","131313");
$user3->Showinfo();


$user = new SuperUser('Vasya Pupkin', 'vasya', 'root', 'admin');
var_dump($user->getInfo());


echo "Всего ".User::$countUser."экземпляров User-a";
echo "<br/> Всего ".SuperUser::$countSUser."экземпляров SuperUser-a";

?>