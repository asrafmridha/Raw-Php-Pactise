<?php

// ১ থেকে ১০০ পযন্ত প্রিন্ট
for ($i = 1; $i <= 100; $i++) {
    echo $i;
    // echo "\n";
    echo PHP_EOL;
}
// ১ থেকে ১০০ পযন্ত বিজোড় নাম্বার প্রিন্ট 
for ($i = 1; $i <= 100; $i += 2) {
    echo $i;
    echo PHP_EOL;
}

// 1 theke 100 pojnto odd * Print
for ($i = 1; $i <= 20; $i += 2) {
    for ($j = 0; $j < $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}

// ১০ থেকে ১ পযন্ত প্রিন্ট 

for ($i = 10; $i > 0; $i--) {
    echo $i . PHP_EOL;
}

// multiple stepping and multiple assign 

for ($i = 10, $j = 0; $i > 0; $i--, $j++) {

    echo $i . ":" . $j;
    echo PHP_EOL;
}

// ১ থেকে ১০০ পযন্ত যে সংখ্যাগুলো ৭ দিয়ে ভাগ যায়
for ($i = 0; $i <= 100; $i += 7) {
    echo $i . PHP_EOL;
}

// While loop 
$i = 0;
while ($i < 10) {
    echo $i++ . PHP_EOL;
}
// Do While 
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);
