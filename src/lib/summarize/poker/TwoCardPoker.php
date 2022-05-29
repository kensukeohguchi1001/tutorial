<?php

require_once('PokerRule.php');
require_once('PokerCard.php');

class TwoCardPoker implements PokerRule
{
    private const HIGH_CARD = 'high card';
    private const STRAIGHT = 'straight';
    private const PAIR = 'pair';

    public function getHand(array $cardsRank): string
    {
            $name = self::HIGH_CARD;
            if ($this->isStraight($cardsRank[0], $cardsRank[1]))
            {
                $name = self::STRAIGHT;
            } elseif ($this->isPair($cardsRank[0], $cardsRank[1])) {
                $name = self::PAIR;
            }
            return $name;
    }

    public function isStraight($cardRank1, $cardRank2): bool
    {
            return abs($cardRank1 - $cardRank2) === 1 || $this->isMinMax($cardRank1, $cardRank2);
    }

    public function isMinMax($card1, $card2): bool
    {
            return abs(min(PokerCard::CARD_RANK) - max(PokerCard::CARD_RANK)) === abs($card1 - $card2);
    }

    public function isPair($cardRank1, $cardRank2): bool
    {
            return  $cardRank1 === $cardRank2;
    }
}
