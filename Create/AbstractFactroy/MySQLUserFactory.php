<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:16
 */

namespace Create\AbstractFactroy;


class MySQLUserFactory implements IFactory
{
    public function createUser()
    {
        return new MySQLUser();
    }

    public function createDepartment()
    {
        return new MySQLDepartment();
    }

}