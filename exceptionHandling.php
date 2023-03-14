<?php

class Student
{
    private $name;
    private $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 4) {
            throw new Exception('Invalid Age');
        }
        $this->age = $age;
    }
}
try {
    $student = new Student('Tahmina', 0);
} catch (Exception $e) {
   echo $e->getMessage();
}
