<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../bootstrap/init.php';

$appName = getenv('APP_NAME');

$user = Capsule::table('users')->where('id', 1)->get();
