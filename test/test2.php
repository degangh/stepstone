<?php
interface iAnimal
{
  //protected $animal_type_name = "";

  function move();
}

class Bird implements iAnimal
{
  protected $animal_type_name = "";

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
