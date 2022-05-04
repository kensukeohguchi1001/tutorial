<?php

require_once('PokerHands.php');

class PokerPair implements PokerHands
{
  public function getHands(array $cardRank)
  {
      if ($cardRank[0] === $cardRank[1]) {
        return 'pair';
      }
  }
}
