<?php

namespace Yoan77\AutoLib\Repository;

use Yoan77\AutoLib\Contracts\CRUD;
use Yoan77\AutoLib\Database\Database;

class ResultRepository implements CRUD
{
    public function create(array $items)
    {
        $conn = Database::getInstance()->getConnection()->connect();
        $stmt = $conn->prepare("INSERT INTO algorithm_result (num, result) VALUES (?, ?)");
        $stmt->bind_param("ii", $items['num'], $items['result']);

        $success = $stmt->execute();

        if ($success) {
            $stmt->close();
            $conn->close();

            return [
                'status' => true,
                'success' => [
                    'message' => "result=" . $items['result'] . " armazenado com sucesso",
                ],
            ];
        }

        $conn->close();

        return false;
    }
}
