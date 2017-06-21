<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:53
 */

namespace Singleton;


class Database
{
    private static $con;

    public $ins_time = 1;

    /*构造方法私有化*/
    private function __construct()
    {
        print_r('实例化成功' . $this->ins_time . '次' . "\r\n");
    }

    public static function getInstance()
    {
        if (!self::$con) {
            self::$con = new self();
        }
        return self::$con;
    }
}