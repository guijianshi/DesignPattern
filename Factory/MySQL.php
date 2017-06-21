<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:43
 */

namespace Factory;


class Mysql extends Database
{
    function connect()
    {
        print_r('MySQL connect');
    }
}