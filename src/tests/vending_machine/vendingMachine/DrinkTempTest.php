<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/vending_machine/temp/DrinkTemp.php');

class DrinkTempTest extends TestCase
{
    public function testGetPrice()
    {
        $DrinkTemp = new DrinkTemp('cola');
        $this->assertSame(150, $DrinkTemp->getPrice());
    }

    public function testGetName()
    {
        $DrinkTemp = new DrinkTemp('cola');
        $this->assertSame('cola', $DrinkTemp->getName());
    }

    public function testGetCupNumber()
    {
        $DrinkTemp = new DrinkTemp('cola');
        $this->assertSame(0, $DrinkTemp->getCupNumber());
    }
}
