<?php 
  header( "Content-Type: text/html;charset=utf-8");
$sxml = simplexml_load_file("catalog.xml");
echo $sxml->book[0]->title;
$sxml->book[0]->title ="XML и Chrome";
file_put_contents("catalog.xml", $sxml->asXML());
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
    ?>
  </table>
</body>

</html>