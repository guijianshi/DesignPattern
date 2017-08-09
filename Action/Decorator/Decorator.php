<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 17:13
 */

namespace Action\Decorator;


abstract class Decorator extends Component
{
    public $component;

    public function setComponent(Component $component)
    {
        $this->component = $component;
    }

    public function Operation()
    {
        if (null != $this->component) {
            $this->component->Operation();
        }
    }

}