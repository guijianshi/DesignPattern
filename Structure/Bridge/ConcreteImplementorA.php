<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 9:35
 */

namespace Structure\Bridge;


class ConcreteImplementorA extends Implementor
{
    public function operation()
    {
        echo '具体实现A的方法', '<br/>';
    }

}