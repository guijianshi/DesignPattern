<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 11:29
 */

namespace Structure\Proxy;


class SchoolGirl
{
    protected $name;

    /**
     * SchoolGirl constructor.
     * @param $name
     */
    public function __construct(string $name = '无名')
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}