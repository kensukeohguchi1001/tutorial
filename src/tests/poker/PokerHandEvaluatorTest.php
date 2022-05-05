<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../lib/poker/PokerHandEvaluator.php');

class PokerHandEvaluatorTest extends TestCase
{
    public function testGetHand()
    {
        $handEvaluator = new  PokerHandEvaluator();
        $this->assertSame('high card', $handEvaluator->getHand([new PokerCard('H5'), new PokerCard('C7')]));
        $this->assertSame('pair', $handEvaluator->getHand([new PokerCard('H10'), new PokerCard('C10')]));
        $this->assertSame('straight', $handEvaluator->getHand([new PokerCard('DA'), new PokerCard('S2')]));
        $this->assertSame('straight', $handEvaluator->getHand([new PokerCard('DA'), new PokerCard('SK')]));
    }
}
