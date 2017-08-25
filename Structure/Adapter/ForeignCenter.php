<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:23
 */

namespace Structure\Adapter;


class ForeignCenter
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function 进攻()
    {
        printf('外籍中锋 %s 进攻', $this->name);
    }

    public function 防守()
    {
        printf('外籍中锋 %s 防守', $this->name);
    }


}