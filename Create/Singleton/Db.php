<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/18
 * Time: 13:24
 */

namespace Create\Singleton;


class Db
{
    private static $db;

    /**
     * Db constructor.
     */
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null == self::$db) {
            return self::$db = new self();
        } else {
            return self::$db;
        }
    }


}