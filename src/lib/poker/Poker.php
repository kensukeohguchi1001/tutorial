<?php

require_once('PokerPlayer.php');
require_once('PokerCard.php');
require_once('PokerJudge.php');
require_once('PokerHands.php');
require_once('PokerStraight.php');
require_once('PokerPair.php');
require_once('PokerHighCard.php');

class Poker
{
    public function __construct(private array $cards1, private array $cards2)
    {
    }

    public function start(): array
    {
        $playerCardRanks = [];
        foreach ([$this->cards1, $this->cards2] as $cards) {
            $pokerCards = array_map(fn ($card) => new PokerCard($card), $cards);
            $player = new PokerPlayer($pokerCards);
            $playerCardRanks[] = $player->getCardRanks();
            $pokerJudge = new PokerJudge($playerCardRanks);
            $cardHands = $pokerJudge->getHands();
        }
        return $cardHands;
    }


}
