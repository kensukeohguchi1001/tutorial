<?php

require_once('Player.php');

class Game
{
    public function __construct(private string $name)
    {
    }

    public function start()
    {
        $player = new Player($this->name);
        $cards = $player->drawCards();
        return $cards;
    }
}