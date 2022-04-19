<?php

class PokerGame
{
    public function __construct(private array $cards1, private array $cards2)
    {
    }
    public function start(): array
    {
        $judge = new Judge();
        $hand = $judge->handsJudge($this->card1, $this->card2);
        return [];
    }
}
