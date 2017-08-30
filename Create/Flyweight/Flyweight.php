<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 9:11
 */

namespace Create\Flyweight;


abstract class Flyweight
{
    public abstract function operation(int $extrinsicstate);
}