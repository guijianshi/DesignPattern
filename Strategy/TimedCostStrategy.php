<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 8:55
 */

namespace Strategy;


class TimedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return ($lesson->getDuation() * 5);
    }

    function chargeType()
    {
        return 'hourly rate';
    }
}