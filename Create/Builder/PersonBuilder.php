<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:24
 */

namespace Create\Builder;


abstract class PersonBuilder
{
    public abstract function buildHead();
    public abstract function buildBody();
    public abstract function buildArmLeft();
    public abstract function buildArmRight();
    public abstract function buildLegLeft();
    public abstract function buildLegRight();
}