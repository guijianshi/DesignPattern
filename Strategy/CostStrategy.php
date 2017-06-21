<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 8:53
 */

namespace Strategy;


abstract class CostStrategy
{
    abstract function cost( Lesson $lesson);
    abstract function chargeType();
}