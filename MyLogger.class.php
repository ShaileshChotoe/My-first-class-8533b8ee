<?php

class MyLogger
{
    function log($messages)
    {
        echo $messages;
    }
}

$logger = new MyLogger();
$logger->log('Hello world!');
