<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:48
 */

namespace Create\SimpleFactory;


class OperationSub extends Operation
{
    /**
     * 减法运算类
     * @return mixed
     */
    public function getResult()
    {
        $result = $this->_numberA - $this->_numberB;
        return $result;
    }

}