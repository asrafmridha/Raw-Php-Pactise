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
$fruit->name = "Tahmina\n";  //Set Name
// $fruit->set_name('Tahmina'); //Set Name with Parameter
echo $fruit->get_name(); //Get Name

class Human
{
  // Properties
  public $name;
  public $age;

  function __construct($pesonName = '', $personAge = 0)
  {
    $this->name = $pesonName;
    $this->age  = $personAge;
  }

  // Methods
  function SayIdentity()
  {
    if ($this->age) {
      echo "Hi I am {$this->name} and I am {$this->age} years old\n";
    } else {
      echo "Hi I am {$this->name} and I don't know how old I am\n";
    }
  }
}

$human = new Human('Tahmina');
$human2 = new  Human("Priyanka", 23);
$human->SayIdentity();
$human2->SayIdentity();


class Fund
{
  private $fund;

  function __construct($initialFund = 0)
  {
    $this->fund = $initialFund;
  }
  public function addFund($money)
  {
    $this->fund += $money;
  }
  public function deductFund($money)
  {
    $this->fund -= $money;
  }

  public function getTotalFund()
  {
    echo "Total Fund is {$this->fund}";
  }
}

$ourFund = new Fund(100);

$ourFund->addFund(100);
// echo $ourFund->fund.PHP_EOL;
$ourFund->deductFund(40);
// echo $ourFund->fund;
$ourFund->getTotalFund();
