<?php

require_once('HandEvaluator.php');

class RuleB
{
  public function getHand(array $cards): string
  {
      return 'high card';
  }
}
