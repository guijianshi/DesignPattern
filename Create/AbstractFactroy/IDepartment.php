<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:05
 */

namespace Create\AbstractFactroy;


interface IDepartment
{
    public function insert($data);

    public function find(int $id);
}