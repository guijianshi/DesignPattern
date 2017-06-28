<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 16:09
 */

namespace Register;


class Register
{
    protected static $objects = [];

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    public static function get($alias)
    {
        if (isset(self::$objects[$alias]))
            return self::$objects[$alias];
        else
            return false;
    }
}