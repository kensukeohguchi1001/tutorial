<?php

class vendingMachine
{
    private function depositCoin(int $coin): int
    {
      if ($this->coin = 100) {
        return 100;
      } else {
        return 0;
      }
    }

    public function pressButton(): string
    {
        if($this->depositCoin(100)){
          return 'cider';
        } else {
          return '';
        }
    }
}
