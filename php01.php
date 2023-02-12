<?php

$myName = "Asraf";
$question = "What is Your Name?";
define('PI', 3.1415);

echo "my name is {$myName}, {$question}";
echo "\n";
echo constant('PI');

$name = "Earth";
echo "\n";
var_dump($name);


$fName = "Asraf";
$lName = "Mridha";
// printf('His Name is %s %s', $fName, $lName);

// sprintf() function return and store it another variable 
$output = sprintf('My Name is %s %s', $fName, $lName);

echo $output;
echo "\n";

$alam = 200;
$Rahim = 300;

    if ($alam == $Rahim) {
        echo "Alam and Rahim has same money";
    } elseif ($alam > $Rahim) {
        echo "Alam has more money than Rahim";
    } elseif ($alam < $Rahim) {
        echo "Rahim has more money than Alam";
    }

    echo "\n";
    $food='Apple';
    if('Apple'==$food){
     echo "It is Vitamin C";
    }
    else{
        echo "It is vitamin D";
    }
