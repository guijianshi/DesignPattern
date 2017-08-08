<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:41
 */

namespace Create\SimpleFactory;


class Operation
{
    protected $_numberA;
    protected $_numberB;

    /**
     * @return mixed
     */
    public function getNumberA()
    {
        return $this->_numberA;
    }

    /**
     * @param mixed $numberA
     */
    public function setNumberA($numberA)
    {
        $this->_numberA = $numberA;
    }

    /**
     * @return mixed
     */
    public function getNumberB()
    {
        return $this->_numberB;
    }

    /**
     * @param mixed $numberB
     */
    public function setNumberB($numberB)
    {
        $this->_numberB = $numberB;
    }

    /**
     * 得到结果
     * @return mixed
     */
    public function getResult()
    {
        $result = 0;
        return $result;
    }

}