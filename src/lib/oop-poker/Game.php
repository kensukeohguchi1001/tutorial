<?php

require_once('Player.php');
require_once('Deck.php');
require_once('HandEvaluator.php');
require_once('RuleA.php');
require_once('RuleB.php');


class Game
{
    public function __construct(private string $name, private int $drawNum,private string $ruleType)
    {
    }

    public function start()
    {
        $deck = new Deck();
        $player = new Player($this->name);
        $cards = $player->drawCards($deck, $this->drawNum);
        return $cards;
    }
    // ここで条件分岐を書く
}

// ルールをセットする
// ルールごとによって役を返す
