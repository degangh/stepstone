<?php

class Dog {
  public static function load()
  {
    $dog = new self;

    return $dog;
  }

}

var_dump($dog);
