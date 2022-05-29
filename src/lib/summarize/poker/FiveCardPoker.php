<?php

class FiveCardPoker implements PokerRule
{
        private const HIGH_CARD = 'high card';
        private const STRAIGHT = 'straight';
        private const ONE_PAIR = 'one pair';
        private const TWO_PAIR = 'two pair';
        private const THREE_CARD = 'three card';
        private const FOUR_CARD = 'four card';
        private const FULL_HOUSE = 'full house';
        private const ONE_PAIR_NUMBER = 4;
        private const TWO_PAIR_NUMBER = 3;
        private const THREE_CARD_NUMBER = 1;

        public function getHand(array $cardRank): string
        {
            $name = self::HIGH_CARD;
            sort($cardRank);
            if ($this->isStraight($cardRank)) {
                $name = self::STRAIGHT;
            } elseif ($this->isOnePair($cardRank)) {
                $name = self::ONE_PAIR;
            } elseif ($this->isTwoPair($cardRank)) {
                $name = self::TWO_PAIR;
            } elseif ($this->isThreeCard($cardRank)) {
                $name = self::THREE_CARD;
            } elseif ($this->isFourCard($cardRank)) {
                $name = self::FOUR_CARD;
            } elseif ($this->isFullHouse($cardRank)) {
                $name = self::FULL_HOUSE;
            }
            return $name;
        }

        public function isStraight(array $cardRank): bool
        {
            return range($cardRank[0], $cardRank[0] + count($cardRank) - 1) === $cardRank || $this->isMinMax($cardRank);   return $cardRank[2] - $cardRank[1] === 1 && $cardRank[1] - $cardRank[0] === 1
            || $this->isMinMax($cardRank);
        }

        public function isMinMax(array $cardRank): bool
        {
            return $cardRank === [min(Card::CARD_RANK), min(Card::CARD_RANK) + 1, min(Card::CARD_RANK) + 2, min(Card::CARD_RANK) + 3, max(Card::CARD_RANK)];
        }

        public function isOnePair(array $cardRank): bool
        {
            return count(array_unique($cardRank)) === self::ONE_PAIR_NUMBER;
        }
        public function isTwoPair(array $cardRank): bool
        {
            return count(array_unique($cardRank)) === self::TWO_PAIR_NUMBER;
        }
        public function isThreeCard(array $cardRank): bool
        {
            return count(array_unique($cardRank)) === self::THREE_CARD_NUMBER;
        }

        public function isFourCard(array $cardRank): bool
        {
            return count(array_unique(array_slice($cardRank, 0, 4))) === 1 &&
            count(array_unique(array_slice($cardRank, 4, 1))) === 1 || count(array_unique(array_slice($cardRank, 0, 1))) === 1 &&
            count(array_unique(array_slice($cardRank, 1, 4))) === 1;
        }

        public function isFullHouse(array $cardRank): bool
        {
            return count(array_unique(array_slice($cardRank, 0, 3))) ===1 &&
        count(array_unique(array_slice($cardRank, 3, 2))) === 1 || count(array_unique(array_slice($cardRank, 0, 2))) === 1 &&
        count(array_unique(array_slice($cardRank, 2, 3))) === 1;
        }
}
