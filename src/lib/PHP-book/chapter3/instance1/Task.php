<?php

class Task
{
    public function __construct(private string $name, private int $progress)
    {
    }


    public function isCompleted() : bool
    {
        return $this->progress >= 100; // $progressが100以上なら真を返す
    }

    public function getName(): string
    {
        return $this->name;
    }
}
