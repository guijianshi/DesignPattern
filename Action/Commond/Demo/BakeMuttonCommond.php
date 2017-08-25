<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 13:32
 */

namespace Action\Commond\Demo;

//烤羊肉串命令
class BakeMuttonCommond extends Commond
{
    public function executeCommond()
    {
        $this->receiver->bakeMutton();
    }

    public function __toString()
    {
        return '烤羊肉';
    }

}