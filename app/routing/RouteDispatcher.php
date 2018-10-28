<?php

namespace App;

use AltoRouter;
use App\Controllers\IndexController;

class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if($this->match) {
            list($this->controller, $this->method) = explode('@', $this->match['target']);
//            require_once __DIR__ . '/../controllers/BaseController.php';
//            require_once __DIR__ . '/../controllers/IndexController.php';
//            $index = new IndexController();
//            $index->show();
        } else {
            header($_SERVER['SERVER_PROTOCOL'], '404 Not Found');
            echo 'Page not found';
        }
    }
}