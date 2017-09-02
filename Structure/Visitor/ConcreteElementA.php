<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:26
 */

namespace Structure\Visitor;


class ConcreteElementA extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementA($this);
    }

    public function operationA()
    {

    }

}