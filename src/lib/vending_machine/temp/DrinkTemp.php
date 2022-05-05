<?php

class DrinkTemp extends ItemTemp
{
  private const PRICE = [
      'cider' => 100,
      'cola' => 150,
  ];

  public function __construct(string $name)
  {
      parent::__construct($name);
  }

  public function getPrice()
  {
      return self::PRICE[$this->name];
  }

  public function getCupNumber()
  {
      return 0;
  }
}
