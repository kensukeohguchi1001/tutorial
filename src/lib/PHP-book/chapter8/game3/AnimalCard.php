<?php

require_once('Cards.php');

class AnimalCard implements Cards
{
  private $card;

  public function __construct()
  {
  }

  // 擬似的に数字を返す
  public function getValue(int $position): string
  {
    return 'Penguin';
  }

  public function shuffle(): void
  {
    echo 'shuffle' . PHP_EOL;
  }
}
