<?php

require_once('Card.php');
require_once('HandEvaluator.php');
require_once('PokerTwoCardRule.php');
require_once('PokerThreeCardRule.php');

class Game
{
    public function __construct(private array $cards1, private array $cards2)
    {
    }

    public function start()
    {
        $hands = [];
        foreach ([$this->cards1, $this->cards2] as $cards) {
                $PokerCard = array_map(fn ($card) => new Card($card), $cards);
                $rule = $this->getRule($cards);
                $handEvaluator = new HandEvaluator($rule);
                $hands[] = $handEvaluator->getHand($PokerCard);
        }
        return $hands;
    }

    public function getRule(array $cards): PokerRule
    {
        $rule = new PokerTwoCardRule;
        if (count($cards) === 3) {
            $rule = new PokerThreeCardRule;
        }
        return $rule;
    }
}
