<?php

namespace Yoan77\AutoLib\Database;

class Database
{
    private static ?Database $instance = null;

    private $connection;

    private function __construct() {
        $this->connection = new MySQL('db', 'root', 'root', 'algo_db');
        $this->connection->connect();
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
