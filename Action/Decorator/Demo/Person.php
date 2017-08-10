<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 9:36
 */

namespace Action\Decorator\Demo;


class Person
{
    private $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo '姓名: ' . $this->name ,'<br/>';
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