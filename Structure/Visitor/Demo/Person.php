<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 9:48
 */

namespace Structure\Visitor\Demo;


abstract class Person
{
    public abstract function accept(Action $visitor);
}