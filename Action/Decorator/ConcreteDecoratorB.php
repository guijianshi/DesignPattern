<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 17:23
 */

namespace Action\Decorator;


class ConcreteDecoratorB extends Decorator
{
    public function Operation()
    {
        parent::Operation();
        $this->addedBehaviour();
        echo "具体装饰对象B的操作";
    }


    private function addedBehaviour()
    {

    }
}