<?php

require_once('Logger.php');

trait LoggingTrait
{
    private $logger;

    private $logFileName;

    public function loadLogger()
    {
        if ($this->logFileName === null ) {
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new logger($this->logFileName);
        $this->logger->clear();
    }

    public function log(string $data):void
    {
        if ($this->logger === null) {
            $this->loadLogger();
        }
        $data = date('Y-m-d H:i:s') . '' . $data;
        $this->logger->write($data);
    }
}
