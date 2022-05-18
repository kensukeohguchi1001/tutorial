<?php

interface Cards
{
    public function shuffle(): void;

    public function getValue(int $position): string;
}
