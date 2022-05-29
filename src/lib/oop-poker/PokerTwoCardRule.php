<?php

require_once('Card.php');
require_once('PokerRule.php');

class PokerTwoCardRule implements PokerRule
{
        private const HIGH_CARD = 'high card';
        private const PAIR = 'pair';
        private const STRAIGHT = 'straight';

        public function getHand(array $cards): string
        {
            $cardRanks = array_map(fn ($card) => $card->getRank(), $cards);
            $name = self::HIGH_CARD;
            if ($this->isStraight($cardRanks[0], $cardRanks[1])) {
                $name = self::STRAIGHT;
            } elseif ($this->isPair($cardRanks[0], $cardRanks[1])) {
                $name = self::PAIR;
            }
            return $name;
        }

        public function isStraight(int $card1, int $card2): bool
        {
            return abs($card1 - $card2) === 1 || $this->isMinMax($card1, $card2);
        }

        public function isMinMax(int $card1, int $card2): bool
        {
            return abs($card1 - $card2) === (max(Card::CARD_RANK) - min(Card::CARD_RANK));
        }

        public function isPair(int $card1, int $card2): bool
        {
            return $card1 === $card2;
        }

}
