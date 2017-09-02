<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/31
 * Time: 11:28
 */

namespace Structure\Visitor;


class ObjectStructure
{
    private $elements = array();

    public function attch(Element $element)
    {
        array_push($this->elements, $element);
    }

    public function detach(Element $element)
    {
        $this->elements = detach($this->elements, $element);
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }

}