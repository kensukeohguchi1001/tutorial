<?php

class Player
{
    public function __construct(private string $name)
    {
    }


    public function drawCards(Deck $deck, $drawNum)
    {
        return $deck->drawCards($drawNum);
    }
}
