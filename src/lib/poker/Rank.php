<?php

class Rank{
        private CONST CARDS = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
        private array $cardHands;

        public function convertToRank():array
        {
          foreach (self::CARDS as $index => $card) {
              $this->cardHands[$card] = $index;
        }
          return $this->cardHands;
      }
}
