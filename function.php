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
