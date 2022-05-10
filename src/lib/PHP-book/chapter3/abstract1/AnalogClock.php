<?php

require_once('Clock.php');

class AnalogClock extends Clock
{
  public function show(): string
  {
    $minuteHand = 90;
    $hourHand = 157.5;
    return "長針:{$minuteHand}° 短針:{$hourHand}°";
  }
}
