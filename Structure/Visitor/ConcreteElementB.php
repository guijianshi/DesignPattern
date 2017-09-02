<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:27
 */

namespace Structure\Visitor;


class ConcreteElementB extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementB($this);
    }

    public function operationB()
    {

    }

}