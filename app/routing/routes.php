<?php

$router = new AltoRouter;
$router->map('GET', '/about', '', 'about us');

$match = $router->match();
var_dump($match);