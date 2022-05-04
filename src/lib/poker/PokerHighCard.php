<?php

require_once('PokerHands.php');

class PokerHighCard implements PokerHands
{
  public function getHands(array $cardRank)
  {
      return 'high card';
  }
}
