<?php

require_once('PokerRule.php');
require_once('PokerCard.php');

class ThreeCardPoker implements PokerRule
{
    private const HIGH_CARD = 'high card';
    private const STRAIGHT = 'straight';
    private const PAIR = 'pair';
    private const THREE_CARD = 'three card';
    private const PAIR_NUMBER = 2;
    private const THREE_CARD_NUMBER = 1;

    public function getHand(array $cardRank): string
    {
          $name = self::HIGH_CARD;
          sort($cardRank);
          if ($this->isStraight($cardRank)) {
              $name =self::STRAIGHT;
          } elseif ($this->isPair($cardRank)) {
              $name = self::PAIR;
          } elseif ($this->isThreeCard($cardRank)) {
              $name = self::THREE_CARD;
          }
          return $name;
    }

    public function isStraight(array $cardRank): bool
    {
        return $cardRank[2] - $cardRank[1] === 1 && $cardRank[1] - $cardRank[0] === 1
        || $this->isMinMax($cardRank);
    }

    public function isMinMax(array $cardRank): bool
    {
        return abs(min(PokerCard::CARD_RANK) - max(PokerCard::CARD_RANK)) === abs($cardRank[0] - $cardRank[2]) && $cardRank[1] - $cardRank[0] === 1;
    }

    public function isPair(array $cardRank): bool
    {
        return count(array_unique($cardRank)) === self::PAIR_NUMBER;
    }
    public function isThreeCard(array $cardRank): bool
    {
        return count(array_unique($cardRank)) === self::THREE_CARD_NUMBER;
    }


}
