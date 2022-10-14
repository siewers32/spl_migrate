<?php
namespace App\Application;

class App
{
    private Container $c;
    private array $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function addRoute($route) {
        $this->routes[] = $route;
    }

    public function createContainer() {
        $this->c = new Container();
        return $this->c;
    }
    public function get($uri, $type, $action) {
        $obj = new $type($this->c);
        $route = new Route($uri, function () {}); 
        $route->setClosure(function () use ($obj, $action) {
            $obj->$action();
        });
        
        $this->addRoute($route);
    }

    public function post($route, $function) {
        return "hello world from post";
    }

    public function run() {
        foreach($this->routes as $route) {
            if ($route->getUri() == $_SERVER['REQUEST_URI']) {
                echo "We gaan wat doen!!";
                call_user_func_array($route->getClosure(), []);
                echo "function uitgevoerd";
            } else {
                echo "geen route gevonden";
            }
        } 
    }

}