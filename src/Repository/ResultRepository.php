<?php

namespace Yoan77\AutoLib\Repository;

use Yoan77\AutoLib\Contracts\CRUD;
use Yoan77\AutoLib\Database\Database;
use Yoan77\AutoLib\Models\Algorithm;

class ResultRepository implements CRUD
{
    public function __construct(private Algorithm $algorithm) {}

    public function create(array $items)
    {
        $result = $this->algorithm->fatorial($items['id'], $items['num']);

        $conn = Database::getInstance()->getConnection()->connect();
        $stmt = $conn->prepare("INSERT INTO algorithm_result (num, result) VALUES (?, ?)");
        $stmt->bind_param("ii", $items['num'], $result);

        $success = $stmt->execute();

        if ($success) {
            $stmt->close();
            $conn->close();

            return "result $result";
        }

        $conn->close();
    }
}
