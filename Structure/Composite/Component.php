<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 16:36
 */

namespace Structure\Composite;


abstract class Component
{
    protected $name;

    /**
     * Component constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public abstract function add(Component $c);

    public abstract function remove(Component $c);

    public abstract function display(int $depth);


}