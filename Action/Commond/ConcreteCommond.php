<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 10:54
 */

namespace Action\Commond;


class ConcreteCommond extends Commond
{
    public function execute()
    {
        $this->receiver->action();
    }

}