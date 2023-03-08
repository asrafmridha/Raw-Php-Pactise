<?php
$fileName = "/ostad/filephp/filejsonformat.txt";

$students = [
    [
        'fname' => "Asraf",
        'lname' => "Mridha",
        'age'  => "24",
        'class' => 7,
        'roll' => 1
    ], [
        'fname' => "Tahmina",
        'lname' => "Toma",
        'age'  => "22",
        'class' => 5,
        'roll' => 3
    ], [
        'fname' => "Priyanka",
        'lname' => "Priya",
        'age'  => "22",
        'class' => 5,
        'roll' => 4
    ]
];

// json format save data in  file 
// $jsonData = json_encode($students);
// file_put_contents($fileName,$jsonData);

// json format Show data in  file 
$data = file_get_contents($fileName);
$allStudents = json_decode($data,true);
print_r($allStudents);
