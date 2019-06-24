<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 12.04.18
 * Time: 23:15
 */
class Logger{
    private $name = "control.log";
    static private $_instance;
    private function __construct(){}
    private function __clone(){}
    static function getInstance(){
        if(!self::$_instance)
            self::$_instance = new self;
        return self::$_instance;
    }
    function log($msg){
        file_put_contents($this->name, $msg."\n", FILE_APPEND);
    }
    function setPath($path){
        $this->name = $path;
    }

}
$log = Logger::getInstance();
$log->log("Контрольная точка на строке ".__LINE__);
$conf = Logger::getInstance();
$conf->setPath("../xxx.txt");
$conf->log("Контрольная точка на строке ".__LINE__);