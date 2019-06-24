<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 12.04.18
 * Time: 23:54
 */
interface Shape{function  draw();}
class Rectangle implements Shape{
    function draw(){print(__METHOD__);}
}
class Square implements Shape{
    function draw(){print(__METHOD__);}
}
class Circle implements Shape{
    function draw(){print(__METHOD__);}
}
class ShapeFactory{
    function getShape($type){
        $type = strtoupper($type);
        switch($type){
            case "R":return new Rectangle();
            case "S":return new Square();
            case "C":return new Circle();
            default: throw new Exception("Wrong type!");

        }
    }

}
$f = new ShapeFactory();
$r = $f->getShape("r");
$s = $f->getShape("s");
$c = $f->getShape("c");
$r->draw();
$s->draw();
$c->draw();