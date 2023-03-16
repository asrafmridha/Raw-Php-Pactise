<?php
// to See All kind off error 
error_reporting(E_ALL);

// to off error message 
// error_reporting(0);
echo $data;

function custom_error_message($errno, $errmessage, $errfile, $errline)
{
    echo "Error [{$errno}] : {$errmessage} in {$errfile} on line number {$errline}";
}
set_error_handler('custom_error_message');
echo substr([1234], 2);
