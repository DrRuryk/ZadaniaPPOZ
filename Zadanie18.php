<?php

class Logger
{
    private static $instance;
    private $logMessages = [];
    private function __construct(){
        
    }
    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    public function logMessage($message){
        $this->logMessages[] = $message;
    }
    public function getLogMessages(){
        return $this->logMessages;
    }
}

$logger1 = Logger::getInstance();
$logger1->logMessage("To jest wiadomość nr 1");

$logger2 = Logger::getInstance();
$logger2->logMessage("To jest wiadomość nr 2");

var_dump($logger1 === $logger2); //powinno być true 
