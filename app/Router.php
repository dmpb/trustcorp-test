<?php

class Router
{
    /**
     * routes
     *
     * @var array
     */
    protected $routes = [
        'GET' => [],

        'POST' => []
    ];

    /**
     * load
     *
     * @param  string $file
     * @return Router
     */
    public static function load($file)
    {
        $file = __DIR__ . "/../" . $file;

        $router = new static;

        require $file;

        return $router;
    }
    
    /**
     * get
     *
     * @param  string $uri
     * @param  string $controller
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    
    /**
     * post
     *
     * @param  string $uri
     * @param  string $controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * direct
     *
     * @param  string $uri
     * @param  string $method
     * @return string
     */
    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        throw new Exception("No hay ruta definida para este URI");
    }
}
