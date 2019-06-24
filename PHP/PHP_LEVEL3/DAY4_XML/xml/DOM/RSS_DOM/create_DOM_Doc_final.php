<?php

const RSS_NAME = "rss.xml";
const RSS_TITLE = "Последние новости";
const RSS_LINK = 'C:\OpenServer\domains\localhost\BORISOV\2018\PHP_LEVEL3\DAY4_XML\xml\DOM\RSS_DOM\create_DOM_Doc.php';
const DB_NAME = 'C:\OpenServer\domains\localhost\BORISOV\2018\PHP_LEVEL3\DAY4_XML\xml\DOM\RSS_DOM\news.db';
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 14.12.18
 * Time: 11:29
 */
$db = new SQLite3(DB_NAME);
$dom = new DOMDocument();
$dom->FormatOutput = true;
$dom->preserveWhiteSpace =false;
$rss = $dom->createElement('rss','корневой');
$dom->appendChild($rss);
$version = $dom->createAttribute("version");
$version->value = '2.0';
$rss->appendChild($version);
$channel=$dom->createElement('channel', 'rbc');
$dom->appendChild($channel);
$title=$dom->createElement('title', RSS_TITLE);
$channel->appendChild($title);
$link=$dom->createElement('link', RSS_LINK);
$channel->appendChild($link);
//$channel->appendChild($rss);

echo $dom->saveXML();
$sql_select = "SELECT   msgs.id as id,
                                msgs.title AS title,
                                msgs.description AS description,
                                msgs.source AS source,
                                msgs.datetime AS datetime,
                                category.name AS category
                                FROM
                                msgs ,
                                category
                                WHERE
                                msgs.category = category.id

                                ORDER BY
                                msgs.datetime DESC";
$db = new SQLite3(DB_NAME);
$result = $db->query($sql_select);
$re
while($row = $result->fetchArray(SQLITE3_ASSOC)){
       foreach($row as $item){
       echo  $id = $item['id'];
        $title = $item['title'];
        $category = $item['category'];
        $description = $item['description'];
        $dt = date('d-m-Y H:i:s', $item['datetime']);
    }
}


//'1.0', 'utf-8'