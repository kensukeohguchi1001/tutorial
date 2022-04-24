<?php

require_once('Game.php');

class HandEvaluator
{
  public function __construct(private string $rule)
  {
  }

  public function getHand(array $cards): string
  {
      $this->rule->getHand($cards);
  }
}
