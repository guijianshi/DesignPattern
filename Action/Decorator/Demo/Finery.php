<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 9:39
 */

namespace Action\Decorator\Demo;


class Finery extends Person
{
    protected $component;

    public function __construct()
    {

    }

    public function decorator(Person $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        if (null != $this->component) {
            $this->component->show();
        }
    }
}