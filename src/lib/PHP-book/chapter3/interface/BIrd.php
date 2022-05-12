<?php

require_once('Flyable.php');

class Bird implements Flyable
{
    public function fly(): void
    {
        echo 'Bird is flying..' . PHP_EOL;
    }
}
