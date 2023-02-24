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
echo $objClass->name;
// echo $objClass->age;
// echo $objClass->city;
