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
$dom = new DOMDocument(1.0, utf8);
$dom->FormatOutput = true;
$dom->preserveWhiteSpace =false;
$rss = $dom->createElement('rss','корневой');
$dom->appendChild($rss);
$version = $dom->createAttribute("version");
$version->value = '2.0';
$rss->appendChild($version);
$channel=$dom->createElement('channel', 'rbc');
$dom->appendChild($channel);
$link=$dom->createElement('link', RSS_LINK);
$channel->appendChild($link);
//$channel->appendChild($rss);


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
while($res = $result->FetchArray(SQLITE3_ASSOC)){

    $title=$dom->createElement('title', $res['title']);
    $channel->appendChild($title);
    $description=$dom->createElement('description', $res['description']);
    $channel->appendChild($description);
    $category=$dom->createElement('category', $res['category']);
    $channel->appendChild($category);
    $source=$dom->createElement('source', $res['source']);
    $channel->appendChild($source);

}
$dom->saveXML();
$dom->save("proba4.xml");
