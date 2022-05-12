<?php

require_once('Flyable.php');

class Airplane implements Flyable
{
    public function fly(): void
    {
        echo 'Airplane is flying' . PHP_EOL;
    }
}
