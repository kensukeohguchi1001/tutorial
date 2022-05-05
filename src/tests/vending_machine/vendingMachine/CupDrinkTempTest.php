<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/vending_machine/temp/CupDrinkTemp.php');

class CupDrinkTempTest extends TestCase
{
    public function testGetPrice()
    {
        $drink = new CupDrinkTemp('ice cup coffee');
        $this->assertSame(100, $drink->getPrice());
    }

    public function testGetName()
    {
        $drink = new CupDrinkTemp('ice cup coffee');
        $this->assertSame('ice cup coffee', $drink->getName());
    }

    public function testGetCupNumber()
    {
        $drink = new CupDrinkTemp('ice cup coffee');
        $this->assertSame(1, $drink->getCupNumber());
    }
}
