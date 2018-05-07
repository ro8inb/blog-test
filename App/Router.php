<?php


class Router {

    private $routes =
        [
            'home' => ['controller' => 'PostsController', 'method' => 'index' ],
            'posts' => ['controller' => 'PostsController', 'method' => 'index' ],
            'post' => ['controller' => 'PostsController', 'method' => 'post' ]
        ];
    private $request;
    private $argument;

    public function __construct($request, $argument)
    {
        $this->request = $request;
        $this->argument = $argument;

    }

    public function getRoute() {

    }

    public function getArgument () {

    }

    public function renderController () {

        $request = $this->request;
        if(array_key_exists($request, $this->routes)) {
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];
            $currentController = new $controller();
            $currentController->$method($this->argument);
        }
        else {
            echo '404';
        }

    }
}