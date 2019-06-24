<?php 
  header( "Content-Type: text/html;charset=utf-8");
$dom = new DomDocument();
$dom->load("catalog.xml");
$root = $dom->documentElement;
//echo $root->nodeType;
//echo $root->textContent;
$books = $root->childNodes;
 echo $root->textContent.'<br>';
 $titles = $dom->getElementsByTagName('title');

foreach($titles as $title){
    echo "<tr>";
   // echo "<td> {$title}</td>";
          echo "<td> {$title->textContent}</td>";

        echo "</tr>";


}
?>
<html>

<head>
  <title>Каталог</title>
</head>

<body>
  <h1>Каталог книг</h1>
  <table border="1" width="100%">
    <tr>
      <th>Автор</th>
      <th>Название</th>
      <th>Год издания</th>
      <th>Цена, руб</th>
    </tr>
    <?php 
      //Парсинг 
    foreach($titles as $title){
        echo "<tr>";
        // echo "<td> {$title}</td>";
        echo "<td> {$title->textContent}</td>";

        echo "</tr>";


    }
    ?>
  </table>
</body>

</html>