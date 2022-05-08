<?php

require_once('Player.php');
require_once('Deck.php');
require_once('HandEvaluator.php');
require_once('RUleA.php');
require_once('RuleB.php');


class Game
{
    public function __construct(private string $name, private int $drawNum, private string $ruleType)
    {
    }

    public function start()
    {
        // カードの山というアクターに対してインスタンスを作成する
        $deck = new Deck();
        // コンストラクタで受け取ったプレイヤーの名前を引数にとるプレイヤーインスタンスを作成
        $player = new Player($this->name);
        // プレイヤーがカードを引く(drawCards)
        // カードの束と引く枚数を引数にとる
        $cards = $player->drawCards($deck, $this->drawNum);
        // メソッドを呼び出し、ルールインスタンスを作成$ruleに代入
        $rule = $this->getRule();
        
        $handEvaluator = new HandEvaluator($rule);
        $hand = $handEvaluator->getHand($cards);
        return $hand;
    }

    public function getRule()
    {
        if ($this->ruleType === 'A') {
            return new RuleA();
        }
        if ($this->ruleType === 'B') {
            return new RuleB();
        }
        if ($this->ruleType === 'C') {
            return new RuleC();
        }
    }
}
