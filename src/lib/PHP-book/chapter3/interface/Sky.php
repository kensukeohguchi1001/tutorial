<?php

require_once('Flyable.php');

class sky
{
    public function draw(Flyable $flyable): void
    {
        $flyable->fly();
    }
}
