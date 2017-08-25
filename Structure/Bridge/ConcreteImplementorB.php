<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 9:36
 */

namespace Structure\Bridge;


class ConcreteImplementorB extends Implementor
{
    public function operation()
    {
        echo '具体实现B的方法', '<br/>';
    }

}