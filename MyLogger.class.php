<?php
class MyLogger
{
    public function log($loggers)
    {
        echo $loggers;
    }
}
$logger = new MyLogger();
$logger->log("Het werktdd!");
