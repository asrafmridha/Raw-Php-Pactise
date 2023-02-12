<?php

//1 theke 100 pojnto Print
for ($i = 1; $i <= 100; $i++) {
    echo $i;
    // echo "\n";
    echo PHP_EOL;
}

//1 theke 100 pojnto odd number Print
for ($i = 1; $i <= 100; $i += 2) {
    echo $i;
    echo PHP_EOL;
}

//1 theke 100 pojnto odd * Print
for ($i = 1; $i <= 20; $i += 2) {
    for ($j = 0; $j < $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}

// While loop 
$i = 0;
while ($i < 10) {
    echo $i++.PHP_EOL;
}
// Do While 
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);
