<?php

class Item
{
    public function __construct(string $name, int $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public $name;
    
    public $price;
}
