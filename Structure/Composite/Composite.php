<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 16:48
 */

namespace Structure\Composite;


class Composite extends Component
{
    private $childrens = [];

    public function add(Component $c)
    {
        $this->childrens[] = $c;
    }

    public function remove(Component $c)
    {
        $this->childrens = array_filter( $this->childrens, function ($children) use ($c){
             if ($c == $children)
                 return false;
             else
                 return true;
        });
    }

    public function display(int $depth)
    {
        echo str_repeat('-', $depth) .' ' . $this->name . '<br/>';
        /* @var Component $children */
        foreach ($this->childrens as $children) {
            $children->display($depth + 2);
        }
    }

}