<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 10:43
 */

namespace Action\State;


abstract class State
{
    public abstract function handle(Context $context);
}