<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__ . '/../../lib/poker/Poker.php');

class PokerTest extends TestCase
{
  public function testStart()
  {
    $game = new Poker(['CA', 'DA'], ['C10', 'H10']);
    $this->assertSame([['CA', 'DA'], ['C10', 'H10']], $game->start());
  }
}
