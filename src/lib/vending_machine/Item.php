<?php

class Item
{
  private const ITEM_PRICE = [
    'cider' => 100,
    'cola' => 150,
  ];

  public function __construct(private string $name)
  {
  }

  public function getPrice()
  {
    return self::ITEM_PRICE[$this->name];
  }


  public function getName()
  {
    return $this->name;
  }
}
