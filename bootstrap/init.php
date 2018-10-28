<?php

/**
 * Start session if not already started
 */
if(empty($_SESSION)) session_start();

// Load environment variables
require_once __DIR__ . '/../app/config/_env.php';
require_once __DIR__ . '/../app/routing/routes.php';