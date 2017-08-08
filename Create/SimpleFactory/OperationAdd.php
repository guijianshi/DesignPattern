<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:45
 */

namespace Create\SimpleFactory;


class OperationAdd extends Operation
{
    /**
     * 加法运算类
     * @return mixed
     */
    public function getResult()
    {
        $result = $this->_numberA + $this->_numberB;
        return $result;
    }
}