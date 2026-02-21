<?php

namespace Yoan77\AutoLib\Database;

use mysqli;

class MySQL
{
    public string $serverName;

    public string $userName;

    public string $password;

    public string $dbName;

    public function __construct($serverName, $userName, $password, $dbName)
    {
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;
    }

    public function connect()
    {
        $conn = \mysqli_connect($this->serverName, $this->userName, $this->password, $this->dbName);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    public function close() {
        \mysqli_close(); 
    }
}
