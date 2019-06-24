<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 02.12.18
 * Time: 22:36
 */

class MyClass
{
    public $var1 = 'значение 1';
    public $var2 = 'значение 2';
    public $var3 = 'значение 3';

    protected $protected = 'защищенная переменная';
    private   $private   = 'закрытая переменная';

    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            $array[$key] = $value;
        }
        return$array;
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";


$c1=$class->iterateVisible();
var_dump($c1);

?>