<?php

class Database
{
    private $connection;

    private static $instance;

    private function __construct()
    {
        $this->connect();
    }

    public static function getInstance(): Database
    {
        if (self::$instance) {
            return self::$instance;
        }

        return self::$instance = new Database();
    }

    private function connect()
    {
        $this->connection = new PDO(DB_DSN, DB_USER, DB_PASS);
    }

    public function getList(string $tableName): array
    {        
        $start = (($_GET['page'] ?? 1) - 1) * PER_PAGE;
        $sth = $this->connection->prepare("SELECT * FROM ".$tableName." LIMIT ".$start.", ".PER_PAGE);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function count(string $tableName): int
    {
        $sth = $this->connection->prepare("SELECT count(*) FROM ".$tableName);
        $sth->execute();

        return $sth->fetchColumn();
    }
}