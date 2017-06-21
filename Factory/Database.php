<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:36
 */

namespace Factory;


abstract class Database
{
    abstract function connect();
}