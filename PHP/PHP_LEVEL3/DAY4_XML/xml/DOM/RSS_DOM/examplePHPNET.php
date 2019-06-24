<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 14.12.18
 * Time: 11:38
 */

$dom = new DOMDocument('1.0', 'utf-8');

$element = $dom->createElement('test', 'Это корневой элемент!');

// Вставляем новый элемент как корень (потомок документа)
$dom->appendChild($element);

echo $dom->saveXML();
?>