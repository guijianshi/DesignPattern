<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 10:20
 */

namespace Create\Flyweight\Demo;


class WebSiteFactory
{
    private $flyweights = array();

    /**
     * @param string $key
     * @return WebSite
     */
    public function getWebSiteCategory(string $key)
    {
        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteWebSite($key);
        }
        return $this->flyweights[$key];
    }

    public function getWebSiteCount()
    {
        return count($this->flyweights);
    }
}