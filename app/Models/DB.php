<?php

namespace App\Models;

use PDO;
use Dotenv\Dotenv;

class DB
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        // Load environment variables
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2)); // Adjust path as needed
        $dotenv->load();

        // Get DB credentials from .env
        $host = $_ENV['DB_HOST'];
        $db = $_ENV['DB_DATABASE'];
        $user = $_ENV['DB_USERNAME'];
        $pass = $_ENV['DB_PASSWORD'];
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->connection = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DB();
        }

        return self::$instance->connection;
    }
    public static function query($sql, $params = [])
{
    $pdo = self::getInstance(); // Get the PDO connection
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}

public static function lastInsertId()
{
    return self::getInstance()->lastInsertId();
}

}
