<?php

class TaxCalculator
{
    private $lastCalculated;

    public function calculate(int $price, float $tax): float
        {
            if ($tax < 0) {
                throw new Exception('税率はプラスで記載');
            }
            $this->lastCalculated = $calculate = $price + $price * $tax;
            return $calculate;
        }

    public function reset(): void
    {
        $this->lastCalculated = null;
        echo '計算をリセット'. PHP_EOL;
    }
}
