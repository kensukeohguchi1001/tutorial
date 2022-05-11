<?php

require_once('Clock.php');

class Canvas
{
    public $backgroundColor;

    public function drawClock(Clock $clock): void
    {
        echo $clock->show(), PHP_EOL;
    }
} 
