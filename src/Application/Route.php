<?php
namespace App\Application;


class Route
{
    private string $uri;
    private string $type;
    private \Closure $closure;

    public function __construct($uri, $closure) {
        $this->uri = $uri;
        $this->closure = $closure;
    }

    public function getUri() {
        return $this->uri;
    }

    public function getClosure() {
        return $this->closure;
    }

    public function setClosure($closure) {
        $this->closure = $closure;
    }

}