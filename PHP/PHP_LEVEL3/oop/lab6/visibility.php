<?php
class ParentClass{
    public $public =1;
    protected $protected = 2;
    private $private = 5;
    function getProtected(){
    return $this->protected;
}
    function getPrivate(){
        return $this->private;
    }
}
$parent = new ParentClass();
echo $parent->getProtected();
echo $parent->getPrivate();

class ChildClass extends ParentClass {
//    public function __set($property, $value)
//    {
//        if (property_exists($this, $property)) {
//            $this->$property = $value;
//        }
//    }
    function getParentProtected(){
       return  $this->protected;
    }
    function getParentPrivate(){
        return  $this->private;
    }
}
$child =new ChildClass();
echo $child->getParentProtected();
//echo $child->getPrivate();
echo $child->getParentPrivate();//не работает из-за private