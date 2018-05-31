<?php
namespace Krypton\Models;

class Route {
    /**
     *
     * @var string
     */
    private $routePath;
    /**
     *
     * @var string
     */
    private $HTTPMethod;
    /**
     *
     * @var callable
     */
    private $callback;
    /**
     * @return string
     */
    public function getRoutePath()
    {
        return $this->routePath;
    }

    /**
     * @param string $routePath
     */
    public function setRoutePath(string $routePath)
    {
        $this->routePath = $routePath;
    }

    /**
     * @return string
     */
    public function getHTTPMethod()
    {
        return $this->HTTPMethod;
    }

    /**
     * @param string $HTTPMethod
     */
    public function setHTTPMethod(string $HTTPMethod)
    {
        $this->HTTPMethod = $HTTPMethod;
    }

    /**
     * @return callable
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param callable $callback
     */
    public function setCallback(callable $callback)
    {
        $this->callback = $callback;
    }


}