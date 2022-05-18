<?php

interface Card
{
    public function shuffle(): void;

    public function getValue(int $position): string;
}

