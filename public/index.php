<?php

require_once __DIR__ . '/../app/config/_env.php';

$appName = getenv('APP_NAME');
echo $appName;