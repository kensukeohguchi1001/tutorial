<?php

require_once('PokerGame.php');

$game1 = new Game(['CA', 'DA'], ['C9', 'H10']);
$test = $game1->start();
var_dump($test);

// $game2 = new Game(['C2', 'D2', 'S2'], ['C10', 'H9', 'DJ']);
// $game2->start();

// ['pair'],['straight'] ⇦のような形で返り値が帰ってくる
  
