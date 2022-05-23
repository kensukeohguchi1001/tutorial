<?php

require_once('Card.php');
require_once('PokerRule.php');

class PokerThreeCardRule implements PokerRule
{
      private const HIGH_CARD = 'high card';
      private const PAIR = 'pair';
      private const STRAIGHT = 'straight';
      private const THREE_CARD = 'three card';

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

      public function isStraight(array $cardRanks): bool
      {
            sort($cardRanks);
            return range($cardRanks[0], $cardRanks[0] + count($cardRanks) - 1) === $cardRanks || $this->isMinMax($cardRanks);
      }

      public function isMinMax(array $cardRanks): bool
      {
            return $cardRanks === [min(PokerCard::CARD_RANK), min(PokerCard::CARD_RANK) + 1, max(PokerCard::CARD_RANK)];
      }

      public function isPair(array $cardRanks): bool
      {
            return count(array_unique($cardRanks)) === 2;
      }
      public function isThreeCard(array $cardRanks): bool
      {
            return count(array_unique($cardRanks)) === 1;
      }

}
