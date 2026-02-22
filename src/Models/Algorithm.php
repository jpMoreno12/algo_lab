<?php

namespace Yoan77\AutoLib\Models;

use Exception;

class Algorithm
{
    public function fatorial(int $id, int $num)
    {
        $result = 1;

        if ($id !== 1) $this->notExists();

        for ($i = 1; $i <= $num; $i++) {
            $result *= $i;
        }

        return $result;
    }

    private function notExists()
    {
        throw new Exception('numero de algoritmo nao existe');
    }
}
