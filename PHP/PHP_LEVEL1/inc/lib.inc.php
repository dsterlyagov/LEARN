<?php 

// drawMenu($menu,$vertical=true) {
//       echo "<ul>";

// }

function drawMenu($menu,$position=true) {
	if (!is_array($menu)) {
		return false;
	}
     echo "<ul>";
     $style=" ";
        if (!$position)
        $style=" style='display:inline; margin-right:15px'";
      
      foreach ($menu as $value)
      { 
        echo "<li$style>";
         // echo "<a href=".$value['href'].">".$value['link']."</a>";
        echo "<a href={$value['href']}>{$value['link']}</a>";
        echo "</li>";
      }
      echo "</ul>";
      return true;
}

$cnt=0;
function multitable($rows, $cols, $colors="blue") {
  $GLOBALS['cnt']++;
  echo "Таблица отрисована {$GLOBALS['cnt']} раз";
  echo "<table border = '1'>";
   for ($i=1;$i<=$rows;$i++){
    echo "<tr>";
    for ($j=1;$j<=$cols;$j++){
      if ($i==1 or $j==1)
        echo"<th style = 'background:$colors'>".$i*$j."</th>";
        else    echo "<td>".$i*$j."</td>";
    }
        echo "</tr>";
   }
    echo "<table>";
  }
?>