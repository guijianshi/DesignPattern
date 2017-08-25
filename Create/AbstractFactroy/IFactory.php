<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:15
 */

namespace Create\AbstractFactroy;


interface IFactory
{
    public function createUser();

    public function createDepartment();
}