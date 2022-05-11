<?php

require_once('DigitalClock.php');
require_once('Canvas.php');
require_once('AnalogClock.php');

$canvas = new Canvas();

$currentTime = strtotime('2018-08-22 17:15');
$digitalClock = new DigitalClock();
$digitalClock->setTime($currentTime);
echo $canvas->drawClock($digitalClock) . PHP_EOL;

$analogClock = new AnalogClock();
$analogClock->setTime($currentTime);
echo $canvas->drawClock($analogClock) . PHP_EOL;
