<?php

use App\RouteDispatcher;
use App\Classes\Database;
/**
 * Start session if not already started
 */
if(empty($_SESSION)) session_start();

// Load environment variables
require_once __DIR__ . '/../app/config/_env.php';

// Instantiate Database
new Database;

// Load routes
require_once __DIR__ . '/../app/routing/routes.php';

// Instantiate Router
new RouteDispatcher($router);