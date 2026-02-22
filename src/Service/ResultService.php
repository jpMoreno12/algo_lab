<?php

namespace Yoan77\AutoLib\Service;

use Yoan77\AutoLib\Contracts\CRUD;

class ResultService {

    public function __construct(private CRUD $repository) {}

    public function create(array $body) {
        return $this->repository->create($body);
    }
}
