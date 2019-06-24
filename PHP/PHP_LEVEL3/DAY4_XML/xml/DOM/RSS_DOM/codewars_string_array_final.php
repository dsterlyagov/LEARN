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

    echo '<br>';
    }
