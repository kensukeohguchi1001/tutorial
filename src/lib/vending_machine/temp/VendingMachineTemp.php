<?php
// カップコーヒー（カップに注ぐコーヒー）のアイスとホットも選択できるようにします。値段はどちらも100円です
// カップの在庫管理も行ってください。カップコーヒーが一つ注文されるとカップも在庫から一つ減ります。自動販売機が保持できるカップ数は最大100個とします
// カップを追加できるようにしてください
// 継承を使って実装しましょう。

require_once('DrinkTemp.php');
require_once('CupDrinkTemp.php');

class VendingMachineTemp
{
    private int $depositCoin = 0;
    private int $cupAmount = 0;
    private const VENDING_MACHINE_COIN = 100;
    private const CUP_MAX_NUMBER = 100;

    public function depositCoin(int $coinAmount): int
    {
        if ($coinAmount === self::VENDING_MACHINE_COIN) {
            $this->depositCoin += $coinAmount;
        }
        return $this->depositCoin;
    }

    public function pressButton(Item $item)
    {
        $price = $item->getPrice();
        $cupNumber = $item->getCupNumber();
        if ($this->depositCoin >= $price || $cupNumber <= $this->cupAmount) {
          return $this->name;

        } else {
          return '';
        }
    }

    public function addCup($cup): int
    {
      if ($cup > self::CUP_MAX_NUMBER) {
          return self::CUP_MAX_NUMBER;
      }
        return $this->cupAmount += $cup;
    }
}
