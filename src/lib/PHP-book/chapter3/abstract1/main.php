<?php

require_once('DigitalClock.php');

$currentTIme = strtotime('2018-08-22 17:15');
$digitalClock = new DigitalClock();
$digitalClock->setTime($currentTIme);
echo $digitalClock->show();
