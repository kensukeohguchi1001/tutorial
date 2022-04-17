<?php


class Item
{
    const PRICES = [
        'cola' => 150,
        'cider' => 100,
    ];


    public function __construct(private string $name)
    {
    }

    public function getPrice()
    {
        return self::PRICES[$this->name];
    }

    public function getName()
    {
        return $this->name;
    }

}
