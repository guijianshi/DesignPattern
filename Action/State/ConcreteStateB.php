<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:54
 */

namespace Action\State;


class ConcreteStateB extends State
{
    public function handle(Context $context)
    {
        $context->setState(new ConcreteStateA());
    }

}