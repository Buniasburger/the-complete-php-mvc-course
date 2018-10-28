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

            if(is_callable([$this->controller, $this->method])) {
                call_user_func_array([$this->controller, $this->method], $this->match['params']);
            } else {
                echo "The method {$this->method} is not defined in {$this->controller}";
            }
//            require_once __DIR__ . '/../controllers/BaseController.php';
//            require_once __DIR__ . '/../controllers/IndexController.php';
//            $index = new IndexController();
//            $index->show();
        } else {
            views('errors/404');
        }
    }
}