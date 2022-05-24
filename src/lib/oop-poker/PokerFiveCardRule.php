<?php

require_once('Card.php');
require_once('PokerRule.php');

class PokerFIveCardRule implements PokerRule
{
    private const HIGH_CARD = 'high card';
    private const ONE_PAIR = 'one pair';
    private const TWO_PAIR = 'two pair';
    private const THREE_CARD = 'three card';
    private const STRAIGHT = 'straight';
    private const FULL_HOUSE = 'full house';
    private const FOUR_CARD = 'four card';


    public function getHand(array $cards)
    {
        $cardRanks = array_map(fn ($card) => $card->getRank(), $cards);
        $name = self::HIGH_CARD;
        if ($this->isStraight($cardRanks)) {
          $name = self::STRAIGHT;
        } elseif ($this->isPair($cardRanks)) {
          $name = self::PAIR;
        } else
          return $name;
    }

    public function isOnePair(array $cardRanks): bool
    {
          return count(array_unique($cardRanks)) === 4;
    }

    public function isTwoPair(array $cardRanks): bool
    {
          return count(array_unique($cardRanks)) === 3;
    }

    public function isThreeCard(array $cardRanks): bool
    {
          return count(array_unique($cardRanks)) === 3;
    }

    public function isStraight(): bool
    {
          sort($cardRanks);
          return range($cardRanks[0], $cardRanks[0] + count($cardRanks) - 1) === $cardRanks || $this->isMinMax($cardRanks);
    }

    public function isMinMax(): bool
    {

    }

    public function isFullHouse(): bool
    {
        
    }

    public function FourCard(): bool
    {

    }
}
