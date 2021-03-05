<?php
class MyLogger
{
    public function log($logger) 
    {
        echo $logger;
    }
}
$logger = new MyLogger();
$logger->log("Het werkt!");
