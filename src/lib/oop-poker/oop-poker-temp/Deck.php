<?php

require_once('Card.php');

class Deck
{

    private array $card;

    public function __construct()
    {
        foreach(['H', 'S', 'D', 'C']as $suit){
            foreach(range(1, 13) as $number) {
                $this->card[] = new Card($suit, $number);
            }
        }
    }

    public function drawCards($drawNum)
    {
        return array_slice($this->card, 0, $drawNum);
    }
}
