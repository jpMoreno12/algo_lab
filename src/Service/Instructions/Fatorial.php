<?php

namespace Yoan77\AutoLib\Service\Instructions;

use Yoan77\AutoLib\Contracts\AlgoContract;
use Yoan77\AutoLib\Traits\NotExists;

class Fatorial implements AlgoContract
{
    use NotExists;

    public function instructions(array $items)
    {
        $result = 1;

        if ($items['id'] !== 1) $this->notExists();

        for ($i = 1; $i <= $items['num']; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
