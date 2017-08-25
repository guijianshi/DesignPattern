<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 11:30
 */

namespace Structure\Template;


abstract class AbstractClass
{
    public abstract function Operation1();
    public abstract function Operation2();

    public function templateMethod()
    {
        $this->Operation1();
        $this->Operation2();
        echo '';
    }
}