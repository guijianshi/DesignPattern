<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 8:57
 */

namespace Strategy;


class FixedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return 30;
    }

    function chargeType()
    {
        return 'fixed rate';
    }
}