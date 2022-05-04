<?php

require_once('PokerHands.php');

class PokerStraight implements PokerHands
{
  public function getHands(array $cardRank)
  {
    if (abs($cardRank[0] - abs($cardRank[1] === 1))){
        return 'straight';
    }
  }
}
