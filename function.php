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
    if (gettype($number) != "integer") {
        return "Invalid";
    }
    $result = 1;
    for ($i = $number; $i > 1; $i--) {
        $result = $result * $i;
    }
    return $result;
}

$number = 'sadsad';
echo PHP_EOL;
echo "Factorial of {$number} is " . factorial($number);

//Recursive Function
echo PHP_EOL;
function display($number)
{
    if ($number == 10) {
        return;
    }
    if ($number > 5) {
        echo "The number is {$number}";
        echo PHP_EOL;
    }
    display($number + 1);
}

display(2);
