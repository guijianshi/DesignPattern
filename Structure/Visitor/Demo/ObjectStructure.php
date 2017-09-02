<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 10:27
 */

namespace Structure\Visitor\Demo;


class ObjectStructure
{
    private $elements = [];

    public function attach(Person $element)
    {
        $this->elements[] = $element;
    }

    public function detach(Person $element)
    {
        $this->elements = detach($this->elements, $element);
    }

    public function display(Action $visitor)
    {
        /* @var Person $element */
        foreach ($this->elements as $element)
        {
            $element->accept($visitor);
        }
    }
}