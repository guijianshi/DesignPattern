<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 8:47
 */

namespace Strategy;


abstract class Lesson
{
    private $duation;

    private $costStrategy;

    function __construct($duation, CostStrategy $strategy)
    {
        $this->duation = $duation;
        $this->costStrategy = $strategy;
    }

    function cost()
    {
        return $this->costStrategy->cost($this);
    }

    function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    function getDuation()
    {
        return $this->duation;
    }


}