<?php

require_once('Card.php');
require_once('PokerRule.php');

class PokerThreeCardRule implements PokerRule
{
      private const HIGH_CARD = 'high card';
      private const PAIR = 'pair';
      private const STRAIGHT = 'straight';

      public function getHand(array $cards)
      {
            $cardRanks = array_map(fn ($card) => $card->getRank(), $cards);
      }
}
