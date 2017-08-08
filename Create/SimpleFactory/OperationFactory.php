<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:53
 */

namespace Create\SimpleFactory;


class OperationFactory
{
    /**
     * @param string $operate
     * @return OperationAdd|OperationDiv|OperationMul|OperationSub
     * @throws \Exception
     */
    public static function createOperation(string $operate)
    {
        switch ($operate) {
            case '+':
                $oper = new OperationAdd();
                break;
            case '-':
                $oper = new OperationSub();
                break;
            case '*':
                $oper = new OperationMul();
                break;
            case '/':
                $oper = new OperationDiv();
                break;
            default:
                throw new \Exception("不支持该操作符");
                break;
        }
        return $oper;
    }
}