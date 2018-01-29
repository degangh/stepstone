<?php
abstract class Animal
{
  protected $animal_type_name = "";

  abstract public function move();
}

class Bird extends Animal
{
  public function __construct($animal_type_name)
  {
    $this->animal_type_name = $animal_type_name;
  }

  public function move()
  {
    echo "This bird is flying";
  }

  public function sayhi()
  {
    echo "chiu chiu chiu";
  }
}

$b = new Bird("peacock");

$b->move();
$b->sayhi();
