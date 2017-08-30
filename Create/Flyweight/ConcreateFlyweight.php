<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 9:13
 */

namespace Create\Flyweight;


class ConcreateFlyweight extends Flyweight
{
    public function operation(int $extrinsicstate)
    {
        echo '具体Flyweight:' . $extrinsicstate . '<br/>';
    }

}