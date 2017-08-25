<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:18
 */

namespace Create\AbstractFactroy;


class PgSQLUserFactory implements IFactory
{
    public function createUser()
    {
        return new PgSQLUser();
    }

    public function createDepartment()
    {
        return new PgSQLDepartment();
    }

}