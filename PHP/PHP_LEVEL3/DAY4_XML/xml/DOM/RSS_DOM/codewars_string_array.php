<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 18.12.18
 * Time: 13:32
 */
$e = 'abcd';
foreach (str_split($e) as $k=>$v){
    $n = ucfirst(str_repeat("$v", $k+1));
    echo $n;
    for($i=0; $i<= $k; $i++){


   //  $arr1[$k]= $v;
       // echo $v+=$v;
        $s[$k]=$v;
    }

    echo '<br>';
    }
var_dump($s);
