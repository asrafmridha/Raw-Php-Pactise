<?php

$n = 12;

$r = $n % 2;

switch ($r) {
    case  0:
        echo "This is even Number";
        break;
    default:
        echo 'ok';
}
echo "\n";

$color = "green";
switch ($color) {
    // case 'green':
    //     echo "{$color} is my favourite color";
    //     break;
    // case 'red':
    //     echo "{$color} is my favourite color";
    //     break;

    // evbeo lekha jai 
    case  'green' :
    case  'red' :
        echo "{$color} is my favourite color";
        break;
    case 'blue':
        echo "{$color} is not my favourite color";
    default:
        echo "ok";
}
