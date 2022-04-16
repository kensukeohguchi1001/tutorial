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
    $vendingMachine = new VendingMachine();

    # お金が投入されてない場合は購入できない
    $this->assertSame('', $vendingMachine->pressButton());

    // 100円を入れた場合はジュースを購入できる
    $vendingMachine->depositCoin(100);
    $this->assertSame('cider', $vendingMachine->pressButton());
  }
}
// thisに入れていることで違うメソッドを呼び出せるメソッドを呼び出せる
