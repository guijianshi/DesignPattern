<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 11:32
 */

namespace Structure\Template;


class ConcreteClassA extends AbstractClass
{
    public function Operation1()
    {
        echo '实现操作1,方法A', '<br>';
    }

    public function Operation2()
    {
        echo '实现操作2,方法A', '<br>';
    }


}