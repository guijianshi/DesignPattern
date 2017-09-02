<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:25
 */

namespace Structure\Visitor;


abstract class Element
{
    public abstract function accept(Visitor $visitor);
}