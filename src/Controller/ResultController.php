<?php

namespace Yoan77\AutoLib\Controller;

use Yoan77\AutoLib\Internal\Request;
use Yoan77\AutoLib\Service\ResultService;

class ResultController
{

    public function __construct(private ResultService $service) {}

    public function create(Request $request) {
        if ($request->method === 'POST') {

            $body = $request->body;

            if (array_key_exists('id', $body) && array_key_exists('num', $body)) {
                $runned = $this->service->execute($request->body);
                
                if(!$runned) return "Algo deu errado! Tente Novamente!";
                
                return $runned['success']['message'];
            }

            return 'impossivel fazer request';
        }
    }
}
