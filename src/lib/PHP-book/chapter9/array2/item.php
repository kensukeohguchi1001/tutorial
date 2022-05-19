<?php

class Item
{
    private $itemName;

    private $itemPrice;

    private $itemNumber;

    public function __construct(string $itemNumber, string $itemName, int $itemPrice)
    {
        $this->itemNumber = $itemNumber;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
    }

    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    public function __toString()
    {
        return $this->itemName . '(' . $this->itemPrice . 'yen)';
    }
}
