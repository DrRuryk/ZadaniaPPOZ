<?php

class Logger
{
    private static $logCount =0;
    public static function logMessage($message){
        self::$logCount++;
        echo "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";
    }
    public static function getLogCount(){
        return self::$logCount;
    }
}


