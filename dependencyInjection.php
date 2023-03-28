<?php

interface BaseStudent
{
    public function displayName();
}

class Student implements BaseStudent
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    public function displayName()
    {
        echo "Hello From" . " " . $this->name;
    }
}

// class StudentManager
// {
//     function introductStudent($name)
//     {
//         $st = new Student($name);
//         $st->displayName();
//     }
// }


class StudentManager
{
    function introductStudent($student)
    {
        $student->displayName();
    }
}

$st = new Student("Tahmina Toma");
$sm = new StudentManager();
//Pass Object
$sm->introductStudent($st);
