<?php

$students = array(
    "Asraf",
    "Software Engineer",
    23,
    "Daffodil International University",
);

//elements show by index
echo $students[1] . PHP_EOL;
// count for array
echo count($students) . PHP_EOL;

//for show all data in a array by for using count method
for ($i = 0; $i < count($students); $i++) {

    echo $students[$i] . PHP_EOL;
}

//for show all data in a array by foreach
foreach ($students as $student) {
    echo $student . PHP_EOL;
}
