<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:21
 */

namespace Structure\Visitor;


abstract class Visitor
{
    public abstract function visitConcreteElementA(ConcreteElementA $concreteElementA);

    public abstract function visitConcreteElementB(ConcreteElementB $concreteElementB);

}