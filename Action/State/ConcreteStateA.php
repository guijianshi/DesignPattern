<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:52
 */

namespace Action\State;


class ConcreteStateA extends State
{
    public function handle(Context $context)
    {
       $context->setState(new ConcreteStateB());
    }

}