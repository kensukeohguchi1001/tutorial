<?php

require_once('Cards.php');

class PlayingCard implements Card
{
    private $card;

    public function __construct()
    {
    }

    // 擬似的に数字を返す
    public function getValue(int $position): string
    {
        return '5';
    }

    public function shuffle(): void
        {
            echo 'shuffle' . PHP_EOL;
        }
}
