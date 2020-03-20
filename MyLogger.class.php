<?php

class MyLogger 
{
    function log($message) 
    {
        echo $message;
    }
}

$logger = new MyLogger();
$logger->log('Hello world!');

?>