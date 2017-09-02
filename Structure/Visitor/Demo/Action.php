<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 9:47
 */

namespace Structure\Visitor\Demo;


abstract class Action
{
    public abstract function getManConlusion(Man $man);

    public abstract function getWoManConlusion(Woman $woman);
}