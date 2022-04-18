<?php

// ファイルを読み込む
require_once('player.php');
require_once('Deck.php');


// コンストラクタで値を受け取る

class Game
{
    public function __construct(private string $name, private int $drawNum)
    {
    }

    public function start()
    {
        $player = new Player($this->name);
        $deck = new Deck();
        $cards = $player->drawCards($deck, $this->drawNum);
        return $cards;
    }
}
