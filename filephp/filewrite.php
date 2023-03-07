<?php

$fileName = "/ostad/filephp/f1.txt";
//keep existing Data
$fp = fopen($fileName, "a");
//delete Existing Data
// $fp = fopen($fileName, "w");
fwrite($fp, "Toma\n");
