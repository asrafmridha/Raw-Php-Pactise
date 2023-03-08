<?php

trait Test
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    public function SayHello()
    {
        echo $this->name . " " . "Hello Tahmina" . PHP_EOL;
    }
}
class Priyanka
{
    use Test;
}
class Bristy
{
    use Test;
}

$obj = new Priyanka("Priyanka Says");
$obj2 = new Bristy("Bristy Says");
$obj->SayHello();
$obj2->SayHello();
