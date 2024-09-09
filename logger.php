<?php
class logger{
    public static $logCount=0;
    public static function message($message){
        self::$logCount++;
        echo self::$logCount.' '.$message;  
    }
}
logger::message("First");
echo '<br>';
logger::message("Second");
echo '<br>';
echo 'total log: '.logger::$logCount;
?>