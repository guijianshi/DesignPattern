<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:15
 */

namespace Structure\Adapter;

/**
 * 中锋
 * Class Center
 * @package Structure\Adapter
 */
class Center extends Player
{
    public function attack()
    {
        printf('中锋 %s 进攻', $this->name);
    }

    public function defense()
    {
        printf('中锋 %s 防守', $this->name);
    }

}