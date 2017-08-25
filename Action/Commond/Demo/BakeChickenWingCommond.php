<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 13:33
 */

namespace Action\Commond\Demo;


class BakeChickenWingCommond extends Commond
{
    public function executeCommond()
    {
        $this->receiver->bakeChickenWing();
    }

    public function __toString()
    {
        return '烤鸡翅';
    }


}