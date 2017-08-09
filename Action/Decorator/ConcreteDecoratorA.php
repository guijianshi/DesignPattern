<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 17:19
 */

namespace Action\Decorator;


class ConcreteDecoratorA extends Decorator
{
    private $addedState;

    public function Operation()
    {
        parent::Operation();
        $this->addedState = 'New State';
        echo "具体装饰对象A的操作";
    }


}