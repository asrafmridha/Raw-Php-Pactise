<?php

function isEven($number) //parameters
{
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}

$number = 13;
if (isEven($number)) { //arguments
    echo "{$number} is Even number";
} else {
    echo "{$number} is odd number";
}

//factorial number
function factorial($number)
{
    $result = 1;
    for ($i = $number; $i > 1; $i--) {
        $result = $result * $i;
    }
    return $result;
}

$number = 5;
echo PHP_EOL;
echo "Factorial of {$number} is " . factorial($number);