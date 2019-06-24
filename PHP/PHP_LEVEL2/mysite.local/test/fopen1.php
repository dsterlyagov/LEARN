<?php
$f = fopen("2.docx", "r+");
//echo iconv("windows-1251", "UTF-8", fread ($f,5));
//echo  fread ($f,5);
$lines=[];
while($line = fgets($f)) {
	$lines[] = $line;
}
print_r($lines);
fclose($f);
?>