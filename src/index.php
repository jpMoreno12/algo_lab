<?php

use Yoan77\AutoLib\Controller\ResultController;
use Yoan77\AutoLib\Internal\Request;
use Yoan77\AutoLib\Models\Algorithm;
use Yoan77\AutoLib\Repository\ResultRepository;
use Yoan77\AutoLib\Service\ResultService;

require_once __DIR__ . '/../vendor/autoload.php';

$request = new Request($_SERVER['REQUEST_METHOD']);

$resultInstance = new ResultController(new ResultService(new ResultRepository(new Algorithm())));

$insert = $resultInstance->create($request);

var_dump($insert);

//isso aqui eu vou ter que chamar nos repositories
