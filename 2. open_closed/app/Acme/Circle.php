<?php namespace Acme;

class Circle implements Shape {

  protected $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
    return $this->radius * $this->radius * pi(); 
  }
}