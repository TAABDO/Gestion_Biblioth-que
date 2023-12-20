<?php

namespace App\database;
require __DIR__.'/../../vendor/autoload.php';


use PDO;
use PDOException;
use Exception;

class Connection
{
    private static $conn;

    public static function connect()
    {
        // Load environment variables from the .env file
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();

        if (!isset(self::$conn)) {
            try {
                $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}";
                self::$conn = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
                echo 'Success';
            } catch (PDOException $e) {
                throw new Exception('Connection failed: '.$e->getMessage());
            }
        }

        return self::$conn;
    }
}

