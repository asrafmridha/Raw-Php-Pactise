<?php

$veryold = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 10; $i++) {

    echo $veryold . " ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}
