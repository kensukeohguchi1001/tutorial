<?php

require_once('VendingMachine.php');
require_once('Items.php');
require_once('Drinks.php');
$vendingMachine = new VendingMachine;
$vendingMachine->depositCoin(150);
$cola = new Items('cola');
// new Drinks('cola')ってしたいけどできない、継承がうまくいっていないのか？
// 明日はこの調査から始める pressbuttoで受け取っているものがItems型のため、Drinks型のものが受け取れない、継承していたら、受け取れるはず
$vendingMachine->pressButton($cola);
var_dump($test);

//
