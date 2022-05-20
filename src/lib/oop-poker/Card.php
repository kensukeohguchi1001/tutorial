<?php

class Card
{
        public const CARD_RANK = [
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

        public function __construct(private string $suit)
        {
        }

        public function getRank()
        {
            return self::CARD_RANK[substr($this->suit, 1, strlen($this->suit - 1))];
        }
}
