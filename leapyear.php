<!-- 
1. divisible by 4
2. divisible by 100
3. divisible by 400 -->

<?php
    $year = 2018;
    if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
        echo "This is Leap Year";
    } elseif ($year % 4 == 0 && $year % 100 == 0) {
        echo "This is not Leap Year";
    } elseif ($year % 4 == 0) {
        echo "{$year} is not a leap Year";
    }else{
        echo "{$year} is not a leap Year.";
    }



?>