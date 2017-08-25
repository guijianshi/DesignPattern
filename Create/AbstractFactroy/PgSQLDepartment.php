<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:10
 */

namespace Create\AbstractFactroy;


class PgSQLDepartment implements IDepartment
{
    public function insert($data)
    {
        echo 'pgsql插入一条数据', '<br/>';
    }

    public function find(int $id)
    {
        echo 'pgsql得到一条数据', '<br/>';
        return null;
    }

}