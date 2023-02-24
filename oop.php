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
    echo "Total Fund is {$this->fund}\n";
  }
}

$ourFund = new Fund(100);

$ourFund->addFund(100);
// echo $ourFund->fund.PHP_EOL;
$ourFund->deductFund(40);
// echo $ourFund->fund;
$ourFund->getTotalFund();

abstract class ourClass
{
  function sayHi()
  {
    echo "Hi";
  }
  abstract function eat();
}

class myClass extends ourClass
{
  function eat()
  {
    echo "Hlw I am eating";
  }
}
$myClass = new myClass();
$myClass->eat();

abstract class newClass
{
  final function sayHi()
  {
    echo "Doing Something\n";
  }
}
class newClass2 extends newClass
{
}

$cc = new newClass2();
$cc->sayHi();

// Interface definition
interface Animal
{
  public function makeSound();
}

// Class definitions
class Cat implements Animal
{
  public function makeSound()
  {
    echo " Meow ";
  }
}

class Dog implements Animal
{
  public function makeSound()
  {
    echo " Bark ";
  }
}

class Mouse implements Animal
{
  public function makeSound()
  {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
  $animal->makeSound();
}

//Static methods and properties of classes
class greeting
{
  static $number;
  public static function welcome($number)
  {
    echo self::$number = $number . "\n";
    echo "Hello World!\n";
    self::doSomething();
  }

  static function doSomething()
  {
    echo "I am doing Something";
  }
}
// Call static method
greeting::welcome(7);

class Student
{
  private $name;
  private $age;
  private $class;

  function __construct($name = '', $age = '', $class = '')
  {
    $this->name   = $name;
    $this->age    = $age;
    $this->class  = $class;
  }

  function __get($prop)
  {
    return $this->$prop;
  }

  function __set($prop, $value)
  {
    $this->$prop = $value;
  }
}
echo "\n";
$student = new Student("Asraf", 32);
echo $student->name;
echo $student->age;


class DistrtCollection implements IteratorAggregate, Countable
{
  private $districts;

  public function __construct()
  {
    $this->districts = array();
  }
  function addDistrict($district)
  {
    array_push($this->districts, $district);
  }

  // function allDistrict()
  // {
  //   return $this->districts;
  // }

  function getIterator(): Traversable
  {
    return new ArrayIterator($this->districts);
  }
  function count(): int
  {
    return count($this->districts);
  }
}

$districts = new DistrtCollection();
$districts->addDistrict("Bogura");
$districts->addDistrict("Rajbari");
$districts->addDistrict("Kushtia");


// $allDistrict = $district->allDistrict();
foreach ($districts as $district) {
  echo $district . PHP_EOL;
}

echo count($districts);
