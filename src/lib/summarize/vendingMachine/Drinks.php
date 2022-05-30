<?php

require_once('Items.php');

class Drinks extends Items
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function getPrice()
    {
        return 100;
    }

}
