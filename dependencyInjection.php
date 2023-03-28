<?php

interface BaseStudent
{
    public function displayName();
}

class ImproveStudent implements BaseStudent
{
    private $name;
    private $title;
    function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }
    public function displayName()
    {
        echo "Hello From". " " . $this->title." " . $this->name;
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
    function introductStudent(BaseStudent $student)
    {
        $student->displayName();
    }
}

// $st = new Student("Tahmina Toma");
$sm = new StudentManager();
$ist=new ImproveStudent('Tahmina Toma','Ms');
//Pass Object
$d = new dateTime();
$sm->introductStudent($ist);
