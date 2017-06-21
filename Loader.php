<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 9:02
 */

namespace Loader;


class Loader
{
    static function autoload($class)
    {
        require DIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}