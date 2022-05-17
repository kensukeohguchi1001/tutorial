<?php

require_once __FILE__ . '/MemoryGame.php';

class PlayingCard
{
  private $card;

  public function __construct()
  {
  }

  // 擬似的に数字を返す
  public function getValue(int $position): int
  {
      return 5;
  }

  public function shuffle(): void
    {
        echo 'shuffle' . PHP_EOL;
    }
}
