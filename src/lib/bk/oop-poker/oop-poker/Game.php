<?php

require_once('Deck.php');
require_once('Player.php');

class Game
{
    public function __construct(private string $name, private int $drawNum)
    {
    }

    public function start()
    {
        $player = new Player($this->name);
        $cards = $player->drawCards($this->drawNum);
        return $cards;
    }
}
