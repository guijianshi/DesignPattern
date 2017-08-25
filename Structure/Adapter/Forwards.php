<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:13
 */

namespace Structure\Adapter;


class Forwards extends Player
{
    public function attack()
    {
        printf('前锋 %s 进攻', $this->name);
    }

    public function defense()
    {
        printf('前锋 %s 防守', $this->name);
    }

}