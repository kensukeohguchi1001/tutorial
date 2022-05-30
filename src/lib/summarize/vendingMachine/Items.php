<?php

abstract class Items
{
    abstract public function getPrice();

    public function __construct(protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
