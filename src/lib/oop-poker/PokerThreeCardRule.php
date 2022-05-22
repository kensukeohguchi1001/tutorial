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
            if ($this->isStraight($cardRanks[0], $cardRanks[1], $cardRanks[2])) {
                  $name = self::STRAIGHT;
            } elseif ($this->isPair($cardRanks[0], $cardRanks[1], $cardRanks[2])) {
                  $name = self::PAIR;
            } else 
            return $name;
      }

      public function isStraight(int $card1, int $card2, int $card3): bool
      {
            return $card1 - $card2 === 1 && $card2 - $card3 === 1 || $this->isMinMax($card1, $card2, $card3);
      }

      public function isMinMax(int $card1, int $card2, int $card3): bool
      {
            return abs($card1 - $card2) === (max(Card::CARD_RANK) - min(Card::CARD_RANK)) && $card3 === 3;
      }

      public function isPair(int $card1, int $card2, int $card3): bool
      {
            return $card1 === $card2 !== $card3 || $card1 !== $card2 === $card3 || $card1 === $card3 !== $card2;
      }
      public function isThreeCard(int $card1, int $card2, int $card3): bool
      {
            return $card1 === $card2 === $card3;
      }

}
