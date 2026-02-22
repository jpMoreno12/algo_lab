<?php

namespace Yoan77\AutoLib\Database;

use Exception;

class MySQL
{
    public string $serverName;

    public string $userName;

    public string $password;

    public string $dbName;

    public $conn;

    public function __construct($serverName, $userName, $password, $dbName)
    {
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;
    }

    public function connect()
    {
        $this->conn = \mysqli_connect($this->serverName, $this->userName, $this->password, $this->dbName);

        if (!$this->conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        return $this->conn;
    }

    public function close()
    {
        $this->conn->close();
        echo 'conexao encerrada';
    }
}
