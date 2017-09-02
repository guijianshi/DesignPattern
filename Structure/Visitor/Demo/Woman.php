<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 10:26
 */

namespace Structure\Visitor\Demo;


class Woman extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getWoManConlusion($this);
    }

}