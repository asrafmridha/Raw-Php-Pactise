<?php

$fileName = "/ostad/filephp/filearray.txt";

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
$fp = fopen($fileName, "w");
foreach ($students as $student) {
    //data Save in File
    $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    fwrite($fp, $data) . PHP_EOL;
}
fclose($fp);
