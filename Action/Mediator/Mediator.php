<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 8:39
 */

namespace Action\Mediator;


abstract class Mediator
{
    public abstract function send(string $message, Colleague $colleague);
}