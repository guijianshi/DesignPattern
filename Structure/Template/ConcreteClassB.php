<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 12:03
 */

namespace Structure\Template;


class ConcreteClassB extends AbstractClass
{
    public function Operation1()
    {
        echo '实现操作1,方法B', '<br>';
    }

    public function Operation2()
    {
        echo '实现操作2,方法B', '<br>';
    }

}