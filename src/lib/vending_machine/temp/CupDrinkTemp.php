<?php

class CupDrinkTemp extends ItemTemp
{
    private const PRICE = [
        'hot cup coffee' => 100,
        'ice cup coffee' => 100,
      ];

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function getPrice(): int
    {
        return self::PRICE[$this->name];
    }

    public function getCupNumber(): int
    {
        return 0;
    }

}
