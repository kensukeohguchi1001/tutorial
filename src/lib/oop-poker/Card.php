<?php

class Card
{
        public function __construct(private string $suit)
        {
        }

        public function getRank()
        {
            return $this->suit;
        }
}
