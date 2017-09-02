<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 9:58
 */

namespace Structure\Visitor\Demo;


class Man extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getManConlusion($this);
    }

}