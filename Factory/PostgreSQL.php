<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:44
 */

namespace Factory;


class PostgreSQL extends Database
{
    function connect()
    {
        print_r('PostgreSQL connect');
    }
}