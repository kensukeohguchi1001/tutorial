<?php

require_once('LoggingTrait.php');

class MemberModel
{
    use LoggingTrait;

    public function create(string $memberNumber): void
    {
        $this->log("created {$memberNumber}." . PHP_EOL);
    }

    public function delete(string $memberNumber): void
    {
        $this->log("deleted {$memberNumber}." . PHP_EOL);
    }
}
