<?php

// $veryold = 0;
// $old = 1;
// $new = 1;

// for ($i = 0; $i < 10; $i++) {

//     echo $veryold . " ";
//     $old = $new;
//     $new = $old + $veryold;
//     $veryold = $old;
// }

// $num = "00001";
// for ($i = 0; $i < 15; $i++) {
//     $num = str_pad((int)$num + $i, 5, "0", STR_PAD_LEFT);
//     echo $num."\n";
// }

$number = '0001'; // the number to format
for ($i = 0, $j = 'EC-'; $i < 15; $i++) {
    $num = str_pad(intval($number) + $i, strlen($number), '0', STR_PAD_LEFT);
    $v = $j . $num;
    // var_dump($v);
    echo $v . "\n";
}
