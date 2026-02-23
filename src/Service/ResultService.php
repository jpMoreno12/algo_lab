<?php

namespace Yoan77\AutoLib\Service;

use Yoan77\AutoLib\Contracts\AlgoContract;
use Yoan77\AutoLib\Contracts\CRUD;

class ResultService {

    public function __construct(private AlgoContract $algorithm, private CRUD $repository) {}

    public function execute(array $body) {
        $result = $this->algorithm->instructions($body);

        $body['result'] = $result;

        $query = $this->repository->create($body);

        if(!$query['status']) return false;

        return $query;
    }
}
