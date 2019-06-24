<?php
/* Создание изображения */
$i = imageCreate(700, 500);
//$i = imageCreateTrueColor(500, 300);

/* Подготовка к работе */
//imageAntiAlias($i, true);

$red = imageColorAllocate($i, 255, 0, 0);
$white = imageColorAllocate($i, 0xFF, 0xFF, 0xFF);
$black = imageColorAllocate($i, 0, 0, 0);
$green = imageColorAllocate($i, 0, 255, 0);
$blue = imageColorAllocate($i, 0, 0, 255);
$grey = imageColorAllocate($i, 192, 192, 192);
/**/
imageFill($i, 0, 0, $grey);

/* Рисуем примитивы */
imageSetPixel($i, 10, 10, $red);
imageLine($i, 20, 20, 80, 280, $red);
imageFilledRectangle($i, 20, 20, 80, 280, $blue);
$points = array(0, 0, 100, 200, 300, 200);
imagePolygon($i, $points, 3, $green);
imageEllipse($i, 200, 250, 450, 200, $red);
//imageArc($i, 200, 150, 300, 200, 0, 40, $black);
//imageFilledArc($i, 200, 150, 300, 200, 0, 40, $red, IMG_ARC_PIE);

/* Рисуем текст */
imageString($i, 1, 0, 200, 'PHP5', $black);
imageChar($i, 3, 20, 20, 'PHP5', $blue);
imageTtfText($i, 100, 180, 300, 300, $green,'fonts/georgia.ttf', 'PETYA');

/* Отдаем изображение */
//header("Content-type: image/gif");
//imageGif($i);
header("Content-type: image/png");
imagePng($i);
//header("Content-type: image/jpg");
//imageJpeg($i);
?>
