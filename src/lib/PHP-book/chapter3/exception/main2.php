<?php

require_once('TaxCalculator.php');

$calculate = new TaxCalculator();

try {
    $priceWithTax = $calculate->calculate(100, -0.5);
} catch (Exception $exception) {
    echo '税込金額が計算できませんでした '. $exception->getMessage(). PHP_EOL;
} finally {
    $calculate->reset();
}
