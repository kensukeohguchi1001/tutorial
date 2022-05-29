<?php

require_once('PokerCard.php');
require_once('HandEvaluator.php');
require_once('PokerRule.php');
require_once('TwoCardPoker.php');
require_once('ThreeCardPoker.php');
require_once('FiveCardPoker.php');

class PokerGame
{
    public function __construct(private array $card1, private array $card2)
    {
    }

    public function start(): array
    {
            $cardsArray = [];
            foreach ([$this->card1, $this->card2] as $cards) {
                $pokerCards = array_map(fn ($card) => new PokerCard($card), $cards);
                $rule = $this->getRule($cards);
                $handEvaluator = new HandEvaluator($rule);
                $cardsArray[] = $handEvaluator->getHand($pokerCards);
                }
            return $cardsArray;
    }


    public function getRule(array $cards): PokerRule
    {
        // ツーカードポーカー
        $rule = new TwoCardPoker;
        // スリーカードポーカー
        if (count($cards) === 3) {
            $rule = new ThreeCardPoker;
            // ファイブカードポーカー
        } elseif (count($cards) === 5) {
            $rule = new FiveCardPoker;
        }
        return $rule;
    }
}
