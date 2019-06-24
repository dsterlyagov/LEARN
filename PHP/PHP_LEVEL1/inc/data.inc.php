<?php 

setlocale(LC_ALL, "russian");
$day = strftime("%d");
$day = iconv("windows-1251","utf-8",$day);
$mon = strftime("%B");
$mon = iconv("windows-1251","utf-8",$mon);
// $year = strftime("%Y");
$year = iconv("windows-1251","utf-8",strftime("%Y"));
$hour = (int) strftime("%H");
$wellcome = "";
if ($hour>=0&&$hour<6) {
  $wellcome = "Доброй ночи";
} elseif ($hour>=6&&$hour<12) {
  $wellcome = "Доброе утро";
} elseif ($hour>=12&&$hour<18) {
  $wellcome = "Добрый день";
} else  {
  $wellcome = "Добрый вечер";
} 
$leftMenu = [
          ["link" =>"Домой", "href" =>"index.php"],
          ["link" =>"О нас", "href" =>"index.php?id=about"],
          ["link" =>"Контакты", "href" =>"index.php?id=contact"],
          ["link" =>"Таблица умножения", "href" =>"index.php?id=table"],
          ["link" =>"Калькулятор", "href" =>"index.php?id=calc"],
];
?>