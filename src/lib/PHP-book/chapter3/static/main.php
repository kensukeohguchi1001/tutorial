<?php

require_once('ShoppingPoint.php');

class WeekDayPoint
{
    public function addWeekDayPoint(string $youbi)
    {
        if ($youbi === 'Fri') {
            ShoppingPoint::countUpPoint();
        }
    }
}

function addPricePoint(int $price) {
    if ($price >= 1000) {
        ShoppingPoint::countUpPoint();
    }
}

ShoppingPoint::$point = 0;

ShoppingPoint::countUpPoint();
echo ShoppingPoint:: $point . PHP_EOL;

$weekDayPoint = new WeekDayPoint();
$weekDayPoint->addWeekDayPoint('Fri');
addPricePoint(5000);
echo ShoppingPoint:: $point . PHP_EOL;

