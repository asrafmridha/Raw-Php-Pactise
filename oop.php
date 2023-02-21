<?php
class Fruit
{
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

$fruit = new Fruit();
$fruit->name = "Tahmina";  //Set Name
// $fruit->set_name('Tahmina'); //Set Name with Parameter
echo $fruit->get_name(); //Get Name
