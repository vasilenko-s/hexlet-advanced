<?php


namespace Shop;

class Item
{
  public $name;
  public $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
}
