<?php

class stringUtility
{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
    }
    function search($string)
    {
        $this->search = $string;
        return $this;
    }
    function replace($string)
    {
        if (!isset($this->search)) {
            throw new Exception("Nothing to Replace");
        } else {
            $this->string = str_replace($this->search, $string, $this->string);
            $this->search = "";
        }
        return $this;
    }
    function upperCase()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }
    function lowerCase()
    {
        $this->string = strtolower($this->string);
        return $this;
    }
    function print()
    {
        echo $this->string;
    }
}

$string = new stringUtility('hello world');
//Method Chaining
$string->search('world')
    ->replace('tahmina')
    ->search("hello")
    ->replace("hi")
    ->upperCase()
    ->print();
