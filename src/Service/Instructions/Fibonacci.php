<?php

namespace Yoan77\AutoLib\Service\Instructions;

use Yoan77\AutoLib\Contracts\AlgoContract;
use Yoan77\AutoLib\Traits\NotExists;

class Fibonacci implements AlgoContract
{

    use NotExists;

    public function instructions(array $items)
    {
        if ($items['id'] !== 2) $this->notExists();

        if ($items['num'] < 0) {
            return "Número inválido";
        }

        if ($items['num'] == 0) return 0;
        if ($items['num'] == 1) return 1;

        $anterior = 0;
        $atual = 1;

        for ($i = 2; $i <= $items['num']; $i++) {
            $proximo = $anterior + $atual;
            $anterior = $atual;
            $atual = $proximo;
        }

        return $atual;
    }
}
