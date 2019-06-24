<?php


abstract class UserAbstract {
    abstract function showInfo();
    function __construct(){
    echo __CLASS__;
}


}