<?php
require_once "INewsDB.class.php";
class NewsDB implements INewsDB {
		private $_db=null;
        const DB_NAME = "../news.db";
		function __construct(){
		$this->_db = new SQLite3(self::DB_NAME);
	}
	function __destruct(){
		unset($this->_db);
	}
	function saveNews($title, $category, $description, $source){}
	function getNews(){}
	function deleteNews($id){}

}

$news = new NewsDB();