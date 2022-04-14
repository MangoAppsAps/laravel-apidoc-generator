<?php

namespace Mpociot\ApiDoc\Matching\RouteMatcher;

use Illuminate\Routing\Route;

class RouteMatch implements \ArrayAccess
{
    /**
     * @var Route
     */
    protected $route;

    /**
     * @var array
     */
    protected $rules;

    /**
     * RouteMatch constructor.
     *
     * @param Route $route
     * @param array $applyRules
     */
    public function __construct(Route $route, array $applyRules)
    {
        $this->route = $route;
        $this->rules = $applyRules;
    }

    /**
     * @return Route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset): bool
    {
        return is_callable([$this, 'get' . ucfirst($offset)]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return call_user_func([$this, 'get' . ucfirst($offset)]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset): void
    {
        $this->$offset = null;
    }
}
