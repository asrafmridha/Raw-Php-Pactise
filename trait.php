<?php

trait Test{
    public function SayHello()
    {
        echo "Hello Tahmina" . PHP_EOL;
    }
}
class Priyanka{
    use Test;
}
class Bristy{
    use Test;
}

$obj = new Priyanka;
$obj2 = new Bristy;
$obj->SayHello();
$obj2->SayHello();
