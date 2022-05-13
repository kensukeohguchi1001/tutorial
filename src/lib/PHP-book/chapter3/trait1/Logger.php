<?php

class Logger
{
    public function __construct(private string $fileName)
    {
    }

    public function write(string $data): void
    {
        file_put_contents($this->fileName, $data, FILE_APPEND);
    }
    
    public function clear(): void
    {
        file_put_contents($this->fileName, '');
    }
}
