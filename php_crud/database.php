<?php
class Database
{
    private static $dbName = 'php_crud' ;
    private static $dbHost = 'localhost:8080';
    private static $dbUsername = 'root';
    private static $dbUserpassword ='oluwayemi22ayo';

    private static $cont = null;

    public function __construct(){
        die('Init function is not allowed');
    }

    public static function connect()
    {
        //one connection through the whole application
        if (null == self::$cont)
        {
            try{
                self::$cont = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserpassword)
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect()
        {
            self::$cont = null;
        }

}
?>