<?php

require_once('PokerCard.php');

class HandEvaluator
{
    public function __construct(private PokerRule $rule)
    {
    }

    public function getHand(array $cards): string
    {
          $convertToNumber = array_map(fn ($card) => $card->getRank(), $cards);
          return $this->rule->getHand($convertToNumber);
    }
}
