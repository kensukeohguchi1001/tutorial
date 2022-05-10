<?php

require_once('Clock.php');

class DigitalClock extends Clock
{
  public function show(): string
  {
    return date('H:i', $this->time);
  }
}
