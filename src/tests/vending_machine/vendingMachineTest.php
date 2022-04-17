<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/vending_machine/vendingMachine.php');

class VendingMachineTest extends TestCase
{
  public function testDepositCoin()
  {
    $vendingMachine = new VendingMachine();
    $this->assertSame(0, $vendingMachine->depositCoin(0));
    $this->assertSame(0, $vendingMachine->depositCoin(150));
    $this->assertSame(100, $vendingMachine->depositCoin(100));
  }

  public function testPressButton()
  {
    $cider = new Item('cider');
    $cola = new Item('cola');
    $vendingMachine = new VendingMachine();

    # お金が投入されてない場合は購入できない
    $this->assertSame('', $vendingMachine->pressButton($cider));

    // 100円を入れた場合はジュースを購入できる
    $vendingMachine->depositCoin(100);
    $this->assertSame('cider', $vendingMachine->pressButton($cider));

    $vendingMachine->depositCoin(100);
    $this->assertSame('', $vendingMachine->pressButton($cola));
    // 投入金額が200円の場合はコーラを購入できる
    $vendingMachine->depositCoin(100);
    $this->assertSame('cola', $vendingMachine->pressButton($cola));
  }


}
// thisに入れていることで違うメソッドを呼び出せるメソッドを呼び出せる
