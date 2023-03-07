<?php

$fileName = "/ostad/filephp/f1.txt";
if (is_readable($fileName)) {

    $fp = fopen($fileName, 'r') or die('Failed To Open File');
    while ($line = fgets($fp)) {
        echo $line;
    }
    // for whole file Read 
    echo file_get_contents($fileName);
    // for array wise show
    $data = file($fileName);
    print_r($data);
    fclose($fp);
    // Read file by file Path
    // echo readfile("/ostad/filephp/f1.txt");
}
