<?php

namespace Yoan77\AutoLib\Traits;

use Exception;

trait NotExists
{
    private function notExists()
    {
        throw new Exception('numero de algoritmo nao existe');
    }
}
