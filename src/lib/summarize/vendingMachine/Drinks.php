<?php

require_once('Items.php');

class Drink extends Items
{
    public function __construct(private string $name)
    {
        parent::__construct($name);
    }

    public function getPrice()
    {

    }

}
