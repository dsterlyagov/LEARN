<div class="title-site"><h1>Вывод новостей</h1></div>
<?php
$posts = $news->getNews();
//$posts1= $news->db2Arr($posts);
foreach($posts as $item){
    $id = $item['id'];
    $title = $item['title'];
    $category = $item['category'];
    $description = $item['description'];
    $dt = date('d-m-Y H:i:s', $item['datetime']);
?>
<div class="container">

      <div> Всего последних новостей <?=count($posts);?></div>
    <div class="title-art"><h3><?=$title?></h3></div>
    <div class="text"><?=$description;?> </div>
    <div class="dop_information"><p><?=$category?> @ <?=$dt?></p>
        <p align="right"><a href="news.php?del=<?=$id?>">Удалить</a></p>

    </div>

</div>
<? }
?>
