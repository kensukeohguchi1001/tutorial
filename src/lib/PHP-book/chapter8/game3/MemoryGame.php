<?php

class MemoryGame
{
  private $cards;

  public function __construct(Cards $cards)
  {
      $this->cards = $cards;
      $this->cards->shuffle();
  }

  public function isHit(int $position1, int $position2): bool
  {
      $position1Value = $this->cards->getValue($position1);
      echo "{$position1}枚目のカードは:{$position1Value}" . PHP_EOL;

      $position2Value = $this->cards->getValue($position2);
      echo "{$position2}枚目のカードは:{$position2Value}" . PHP_EOL;
      return $position1Value === $position2Value;
  }

}
