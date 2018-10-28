<?php

use Dotenv\Dotenv;

define('BASE_PATH', realpath(__DIR__ . '/../../'));

require_once BASE_PATH . '/vendor/autoload.php';

$dotEnv = new Dotenv(BASE_PATH);
$dotEnv->load();