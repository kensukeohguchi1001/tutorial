<?php

class CurrencyCal
{
    const CURRENCIES = ['dollar','pound'];
    public static function calculateToYen($amount, $currency)
    {
        try{
            self::convert($amount, $currency);
        } catch (Exception $e) {
            echo '例外:' . $e->getMessage() . PHP_EOL;
        }
    }

    public static function convert ($amount, $currency)
    {
        if (!in_array($currency, self::CURRENCIES)) {
            throw new Exception('対応していない通貨です');
        }
        echo $amount . '円を' . $currency . 'に変換します' . PHP_EOL;
    }
}
// 正常
CurrencyCal::calculateToYen(100, 'dollar');
// 異常
CurrencyCal::calculateToYen(100, 'won');
