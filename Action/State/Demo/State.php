<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 12:51
 */

namespace Action\State\Demo;


abstract class State
{
    public abstract function writeProgram(Work $work);
}