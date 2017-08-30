<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 9:15
 */

namespace Create\Flyweight;


class UnsharedConcreteFlyweight extends Flyweight
{
    public function operation(int $extrinsicstate)
    {
        echo '不共享的具体Flyweight:' . $extrinsicstate . '<br/>';
    }

}