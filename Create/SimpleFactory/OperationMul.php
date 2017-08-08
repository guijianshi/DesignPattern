<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:50
 */

namespace Create\SimpleFactory;


class OperationMul extends Operation
{
    /**
     * 乘法运算类
     * @return mixed
     */
    public function getResult()
    {
        $result = $this->_numberA * $this->_numberB;
        return $result;
    }
}