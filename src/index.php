<?php

use Yoan77\AutoLib\Database\Database;

require_once __DIR__ . '/../vendor/autoload.php';


var_dump(Database::getInstance()->getConnection());
