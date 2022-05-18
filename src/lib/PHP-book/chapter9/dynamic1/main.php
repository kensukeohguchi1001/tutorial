<?php

require_once('Item.php');

$items = [];
$items[] = new Item('圧力鍋', 6500);
$items[] = new Item('電気ケトル', 6500);

$properties = [
      'name' => '商品名',
      'price' => '金額'
];

foreach ($items as $item) {
  foreach ($properties as $property => $label) {
      echo $label, ':' , $item->{$property}, PHP_EOL;
  }
}
