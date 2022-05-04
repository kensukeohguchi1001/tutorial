<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/poker/Poker.php');

class PokerTest extends TestCase
{
    public function testStart()
    {
        $game = new Poker(['CA', 'DA'], ['C9', 'H10']);
        $this->assertSame(['pair', 'straight'], $game->start());
    }
}
