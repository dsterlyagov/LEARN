<?php
require "INewsDB.class.php";
class NewsDB implements INewsDB{
    protected $_db;
    protected $_sql = "CREATE TABLE msgs(
					id INTEGER PRIMARY KEY AUTOINCREMENT,
					title TEXT,
					category INTEGER,
					description TEXT,
					source TEXT,
					datetime INTEGER
					)";
    protected $_sql1 = "CREATE TABLE category(
	id INTEGER,
	name TEXT)";
    protected $_sql2 = "INSERT INTO category(id, name)
SELECT 1 as id, 'Политика' as name
UNION SELECT 2 as id, 'Культура' as name
UNION SELECT 3 as id, 'Спорт' as name ";

    const DB_NAME = 'C:\OpenServer\domains\localhost\BORISOV\2018\PHP_LEVEL3\DAY3_SQLITE3\lab2-4_select_news\BASE\news.db';
    function __construct(){

        if(is_file(self::DB_NAME)){
            $this->_db = new SQLite3(self::DB_NAME);
        } else{
            $this->_db = new SQLite3(self::DB_NAME);
            $this->_db->exec($this->_sql) or die($this->_db->lastErrorMsg());

            $this->_db = new SQLite3(self::DB_NAME);
            $this->_db->exec($this->_sql1) or die($this->_db->lastErrorMsg());

            $this->_db = new SQLite3(self::DB_NAME);
            $this->_db->exec($this->_sql2) or die($this->_db->lastErrorMsg());
        }


    }
    function __destruct(){
        unset($this->_db);
    }

    /**
     *	Добавление новой записи в новостную ленту
     *
     *	@param string $title - заголовок новости
     *	@param string $category - категория новости
     *	@param string $description - текст новости
     *	@param string $source - источник новости
     *
     *	@return boolean - результат успех/ошибка
     */
    function saveNews($title, $category, $description, $source){
        $dt = time();
        $sql = "INSERT INTO msgs(title, category, description, source, datetime) VALUES ('$title', $category, '$description', '$source', $dt)";
        $res = $this->_db->exec($sql);
        if(!$res) return false;
        //$this->createRss();
        return true;
    }

    function clearStr($data) {
//		$data = srip_tags($data);
        return $this->_db->escapeString($data);
    }

    function clearInt($data){
        return abs((int)$data);
    }
    /**
     *	Выборка всех записей из новостной ленты
     *
     *	@return array - результат выборки в виде массива
     */
    function getNews(){
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

            $res = $this->_db->query($sql_select) or die ($this->_db->LastErrorMsg());
            return $this->db2Arr($res);
            }
    function db2Arr($res){
        $arr =[];
        while($row = $res->fetchArray(SQLITE3_ASSOC)){
            $arr[]= $row;
        }
        return $arr;
    }
    /**
     *	Удаление записи из новостной ленты
     *
     *	@param integer $id - идентификатор удаляемой записи
     *
     *	@return boolean - результат успех/ошибка
     */
    function deleteNews($id){$sql_del = "DELETE FROM msgs WHERE id = $id";
        $this->_db->query($sql_del) or die ($this->_db->LastErrorMsg());

    }
}

?>