<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:51
 */

namespace Create\SimpleFactory;


class OperationDiv extends Operation
{
    /**
     * 除法运算类
     * @return mixed
     */
    public function getResult()
    {
        if ($this->_numberB == 0)
            throw new \Exception("除数不得为零");
        $result = $this->_numberA / $this->_numberB;
        return $result;
    }
}