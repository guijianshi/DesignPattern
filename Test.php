<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 16:02
 */

use Action\Strategy\CashContext;
use Action\Decorator\ConcreteComponent;
use Action\Decorator\ConcreteDecoratorA;
use Action\Decorator\ConcreteDecoratorB;
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

    /**
     * 计费策略模式测试方法
     * @param float $money
     * @return float
     */
    public static function StrategyTest(float $money = 300)
    {
        $cash_super = new CashContext('满300返100');
        return $cash_super->getResult($money);
    }

    public static function DecoratorTest()
    {
        $c = new ConcreteComponent();
        $d1 = new ConcreteDecoratorA();
        $d2 = new ConcreteDecoratorB();
        $d1->setComponent($c);
        $d2->setComponent($d1);
        $d2->Operation();
    }
}