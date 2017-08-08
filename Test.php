<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 16:02
 */

class Test
{
    public static function SingleFactoryTest()
    {
        $oper = \Create\SimpleFactory\OperationFactory::createOperation('+');
        $oper->setNumberA(10);
        $oper->setNumberB(20);
        $result = $oper->getResult();
        echo $result;
        return $result;
    }
}