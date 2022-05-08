<?php

class Task2
{
    private string $name;
    private int $progress;
    private $secret;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setProgress(int $progress):void
    {
        if ($progress > 100) {
            $this->progress = 100;
        } elseif ($progress < 0) {
            $this->progress = 0;
        }
          $this->progress = $progress;
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function clearProgress(): int
    {
        return $this->progress = 0;
    }

    public function completeProgress(): int
    {
        return $this->progress = 100;
    }

}
