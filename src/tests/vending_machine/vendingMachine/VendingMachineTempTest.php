<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/vending_machine/temp/VendingMachineTemp.php');

class VendingMachineTempTest extends TestCase
{
public function testDepositCoin()
{
$VendingMachineTemp = new VendingMachineTemp();
$this->assertSame(0, $VendingMachineTemp->depositCoin(0));
$this->assertSame(0, $VendingMachineTemp->depositCoin(150));
$this->assertSame(100, $VendingMachineTemp->depositCoin(100));
}

public function testPressButton()
{
$cider = new Drink('cider');
$cola = new Drink('cola');
$hotCupCoffee = new CupDrink('hot cup coffee');
$VendingMachineTemp = new VendingMachineTemp();

# お金が投入されてない場合は購入できない
$this->assertSame('', $VendingMachineTemp->pressButton($cider));

// 100円を入れた場合はサイダーを購入できる
$VendingMachineTemp->depositCoin(100);
$this->assertSame('cider', $VendingMachineTemp->pressButton($cider));

// 投入金額が100円の場合はコーラを購入できない
$VendingMachineTemp->depositCoin(100);
$this->assertSame('', $VendingMachineTemp->pressButton($cola));
// 投入金額が200円の場合はコーラを購入できる
$VendingMachineTemp->depositCoin(100);
$this->assertSame('cola', $VendingMachineTemp->pressButton($cola));

// カップが投入されてない場合は購入できない
$VendingMachineTemp->depositCoin(100);
$this->assertSame('', $VendingMachineTemp->pressButton($hotCupCoffee));

// カップを入れた場合は購入できる
$VendingMachineTemp->addCup(1);
$this->assertSame('hot cup coffee', $VendingMachineTemp->pressButton($hotCupCoffee));
}

public function testAddCup()
{
$VendingMachineTemp = new VendingMachineTemp();
$this->assertSame(99, $VendingMachineTemp->addCup(99));
$this->assertSame(100, $VendingMachineTemp->addCup(1));
$this->assertSame(100, $VendingMachineTemp->addCup(1));
}
}
