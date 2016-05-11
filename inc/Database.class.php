<?php
class Database
{
    private static $dbName = 'signups';
    private static $dbHost = 'danudenx_dk';
    private static $dbUsername = 'danudenx_dk';
    private static $dbUserPassword = 'pKyLK7t2';

    private static $cont = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect() {
        if (null === self::$cont) {
            try {
                self::$cont =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect() {
        self::$cont = null;
    }
}