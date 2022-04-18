<?php

require_once('Deck.php');

class card
{
    public function __construct(private string $suit, private int $number)
    {
    }

    public function getSuit()
    {
        return  $this->suit;
    }
    public function getNumber()
    {
        return  $this->number;
    }
}
