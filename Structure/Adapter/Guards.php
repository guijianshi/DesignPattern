<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:16
 */

namespace Structure\Adapter;

/**
 * 后卫
 * Class Guards
 * @package Structure\Adapter
 */
class Guards extends Player
{
    public function attack()
    {
        printf('后卫 %s 进攻', $this->name);
    }

    public function defense()
    {
        printf('后卫 %s 防守', $this->name);
    }

}