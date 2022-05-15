<?php

require('TaxCalculator.php');

// スローされた例外を誰もキャッチしない場合、以降のプログラムは中断される
// ex try catch finallyなど

$calculator = new TaxCalculator();
$priceWithTax = $calculator->calculate(100, -0.05);

echo $priceWithTax .PHP_EOL;
