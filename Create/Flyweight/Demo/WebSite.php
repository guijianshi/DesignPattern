<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 10:16
 */

namespace Create\Flyweight\Demo;


abstract class WebSite
{
    public abstract function user(User $user);
}