<?php

// public
// The property or method can be accessed from everywhere. This is default

class MyClass
{
    public $name   = "Tahmina";
    protected $age    = 24;
    private $city   = "Pangsha";
}
$objClass = new MyClass();
echo $objClass->name.PHP_EOL;
// echo $objClass->age;
// echo $objClass->city;

// private
// The property or method can ONLY be accessed within the class
class AddNumbers
{
    private $num1 = 25;
    private $num2 = 15;

    public function addTwo()
    {
        $number3 = $this->num1 + $this->num2;
        echo $number3;
    }
}

$objAddNumbers = new AddNumbers();
$objAddNumbers->addTwo();
