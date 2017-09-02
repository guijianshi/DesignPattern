<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 10:53
 */

namespace Action\Interpreter\Demo;


class SpeedExpression extends AbstractExpression
{
    public function excute(string $key, float $value)
    {
        if ($value > 1000) {
            $speed = '快速';
        } elseif($value < 500 ) {
            $speed = '慢速';
        } else {
            $speed = '中速';
        }
        echo $speed . ' ';
    }

}