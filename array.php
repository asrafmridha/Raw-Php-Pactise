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

// $stdnt = array_shift($students);
// $stdnt = array_pop($students);
// array_push($students, "priynka");
// array_unshift($students, 'Tahmina');

//for show all data in a array by foreach
foreach ($students as $student) {
    echo $student . PHP_EOL;
}

//  এ্যারে শিফট এ্যারের ফাস্ট ইলিমেন্ট বের করে রিটান করে দেয়
// array_shift();
// $stdnt=array_shift($students);

// এ্যারে পপ এ্যারের লাস্ট ইলিমেন্ট বের করে রিটান করে দেয়
// array_pop();
// $stdnt = array_pop($students);

// array_unshift() এ্যারের প্রথমে নতুন ডাটা এন্ট্রি করার জন্য
// array_unshift();
// array_unshift($students,'Tahmina');

// array_push() এ্যারের শেষে নতুন ডাটা এন্ট্রি করার জন্য
// array_push();
// array_push($students,"priynka");
