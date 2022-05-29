<?php

require_once('Items.php');
require_once('Drinks.php');

class VendingMachine
{
    private int $depositedCoin = 0;

    public function depositCoin(int $coinAmount): int
    {
        if ($coinAmount === 100){
            $this->depositedCoin += $coinAmount;
        } else {
            return $coinAmount;
        }
        return $this->depositedCoin;
    }

    public function pressButton(Items $item): string
    {
        $price = $item->getPrice();
        if ($this->depositedCoin === $price) {
            $this->depositedCoin -= $price;
            return $item->getName;
        } else{
            return '';
        }
    }

}
