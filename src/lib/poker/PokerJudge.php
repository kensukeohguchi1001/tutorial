<?php

require_once('PokerHands.php');

class PokerJudge
{
    public function __construct(private array $cardRanks)
    {
    }

    public function getHands()
    {
        return array_map(fn ($getHand) => $getHand->getHands(), $this->cardRanks);
    }
}
