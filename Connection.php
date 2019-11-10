<?php
class Connection
{
    private static $connection;
 
    private function __construct()
    {}
 
    public static function getInstance()
    {
        if (is_null(self::$connection)) {
            self::$connection = new \PDO('mysql:host=lolyz0ok3stvj6f0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;port=3306;dbname=pdptsz0w3famxcd2', 'l4lghrvtm9j8djqt', 'a8udelgj8iwjvda0');
            self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$connection->exec('set names utf8');
        }
        return self::$connection;
    }
}