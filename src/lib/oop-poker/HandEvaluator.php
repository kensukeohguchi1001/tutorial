<?php

require_once('PokerRule.php');

class HandEvaluator
{
    public function __construct(private PokerRule $rule)
    {
    }

    public function getHand(array $cards): string
    {
        return $this->rule->getHand($cards);
    }

    
}
