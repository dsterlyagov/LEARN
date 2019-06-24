<?php
 function nums($x, $y, &$a, &$b, &$c)
 { $a=$x*$y;
 	$b=$x/$y;
 	$c=$x-$y;
 	return $x+$y;
 }

 $sum = nums(2, 3, $mult, $div, $sub);
 echo $sum." ".$mult;
?>