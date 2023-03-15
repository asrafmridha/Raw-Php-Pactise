<?php

class Student
{
    private $name;
    private $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 4) {
            throw new Exception('Invalid Age', 1001);
        } elseif ($age > 35) {
            throw new Exception('Too Old', 1002);
        }
        $this->age = $age;
    }
}
try {
    $student = new Student('Tahmina', 3);
} catch (Exception $e) {
    echo $e->getCode() . ":" . $e->getMessage().PHP_EOL;
}

class MyException extends Exception
{
}
class NetworkException extends Exception
{
}

function testException(){
    throw new NetworkException();
    
}

try{
    testException();
}catch (MyException $e){
    echo "Customize Exception";
} catch (NetworkException $e) {
    echo "Network Exception";
}


