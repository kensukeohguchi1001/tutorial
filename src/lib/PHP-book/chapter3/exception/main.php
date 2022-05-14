<?php

require('TaxCalculator.php');

$calculator = new TaxCalculator();
$priceWithTax = $calculator->calculate(100, -0.05);

echo $priceWithTax .PHP_EOL;
