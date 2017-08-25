<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 9:39
 */

namespace Structure\Bridge;


class Abstraction
{
    protected $implementor;

    /**
     * @param Implementor $implementor
     */
    public function setImplementor(Implementor $implementor)
    {
        $this->implementor = $implementor;
    }

    public function operation()
    {
        $this->implementor->operation();
    }
}