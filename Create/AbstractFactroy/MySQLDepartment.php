<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:07
 */

namespace Create\AbstractFactroy;


class MySQLDepartment implements IDepartment
{
    public function insert($data)
    {
        echo 'mysql插入一条数据', '<br/>';
    }

    public function find(int $id)
    {
        echo 'mysql得到一条数据', '<br/>';
        return null;
    }

}