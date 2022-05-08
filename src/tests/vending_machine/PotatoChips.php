<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/vending_machine/PotatoChips.php');

class PotatoChipsTest extends TestCase
{
    public function testGetPrice()
    {
        $drink = new PotatoChips('potato chips');
        $this->assertSame(150, $drink->getPrice());
    }

    public function testGetName()
    {
        $drink = new PotatoChips('potato chips');
        $this->assertSame('potato chips', $drink->getName());
    }

    public function testGetCupNumber()
    {
        $drink = new PotatoChips('potato chips');
        $this->assertSame(0, $drink->getCupNumber());
    }
}
