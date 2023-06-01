<?php
class DatabaseLinker
{
    private static $host = "mysql:host=localhost;dbname=stage;charset=utf8";
    private static $log = "root";
    private static $password = "";
    private static $conn;
    public static function getconnexion()
    {
        if (DatabaseLinker::$conn == null) {
            DatabaseLinker::$conn = new PDO(DatabaseLinker::$host, DatabaseLinker::$log, DatabaseLinker::$password);
        }
        return DatabaseLinker::$conn;

    }
}
?>