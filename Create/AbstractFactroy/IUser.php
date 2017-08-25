<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:21
 */

namespace Create\AbstractFactroy;


interface IUser
{
    public function insert($data);

    public function getUser($id);
}