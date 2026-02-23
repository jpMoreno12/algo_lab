<?php

namespace Yoan77\AutoLib\Service\Instructions;

use Yoan77\AutoLib\Contracts\AlgoContract;
use Yoan77\AutoLib\Traits\NotExists;

class BubbleSort implements AlgoContract
{

    use NotExists;

    public function instructions(array $items)
    {
        if ($items['id'] !== 3) $this->notExists();

        $array = $items['numbers'];

        $n = count($array);

        for ($i = 0; $i < $n - 1; $i++) {
            $trocou = false;

            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {

                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                    $trocou = true;
                }
            }

            if (!$trocou) {
                break;
            }
        }

        return $array;
    }
}
