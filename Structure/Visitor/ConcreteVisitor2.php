<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:24
 */

namespace Structure\Visitor;


class ConcreteVisitor2 extends Visitor
{
    public function visitConcreteElementA(ConcreteElementA $concreteElementA)
    {
        echo get_class($concreteElementA) .' ' . self::class . '<br/>';
    }

    public function visitConcreteElementB(ConcreteElementB $concreteElementB)
    {
        echo get_class($concreteElementB) .' ' . self::class . '<br/>';
    }

}