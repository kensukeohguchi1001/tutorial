<?php

class ConvertToHand
{
    private const HAND_RANK = [
      '2' => 1,
      '3' => 2,
      '4' => 3,
      '5' => 4,
      '6' => 5,
      '7' => 6,
      '8' => 7,
      '9' => 8,
      '10' => 9,
      'J' => 10,
      'Q' => 11,
      'K' => 12,
      'A' => 13,
    ];

    public function __construct(private array $cardsArray)
      {
      }


    public function getHand()
    {
        return array_map(fn($cardArray) => self::HAND_RANK[$cardArray], $this->cardsArray);
    }
}
