<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 9:18
 */

namespace Create\Flyweight;


class FlyweightFactory
{
    private $flyweight = array();

    /**
     * FlyweightFactory constructor.
     */
    public function __construct()
    {
        $this->flyweight['X'] = new ConcreateFlyweight();
        $this->flyweight['Y'] = new ConcreateFlyweight();
        $this->flyweight['Z'] = new ConcreateFlyweight();
    }

    /**
     * $a ?? $b PHP7新特性 相当于 isset($a) ? $a : $b;
     * @param string $key
     * @return Flyweight
     */
    public function getFlyweight(string $key)
    {
        return $this->flyweight[$key] ?? $this->flyweight['X'];
    }

}