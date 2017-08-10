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
use Action\Decorator\Demo\Person;
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
    public static function strategyTest(float $money = 300)
    {
        $cashSuper = new CashContext('满300返100');
        return $cashSuper->getResult($money);
    }

    /**
     * 装饰器模式测试
     */
    public static function decoratorTest()
    {
        $c = new ConcreteComponent();
        $d1 = new ConcreteDecoratorA();
        $d2 = new ConcreteDecoratorB();
        $d1->setComponent($c);
        $d2->setComponent($d1);
        $d2->Operation();
    }

    /**
     * 装饰器模式测试
     */
    public static function decoratorDemoTest()
    {
        $person = new Person('鬼剑士');
        $whiteCap = new \Action\Decorator\Demo\WhiteCap();
        $tShrit = new \Action\Decorator\Demo\TShirts();
        $bigTrouser = new \Action\Decorator\Demo\BigTrouser();
        $sneaker = new \Action\Decorator\Demo\Sneaker();

        /*后进先出*/
        $sneaker->decorator($person);
        $bigTrouser->decorator($sneaker);
        $tShrit->decorator($bigTrouser);
        $whiteCap->decorator($tShrit);
        $whiteCap->show();
    }

    /**
     * 代理模式测试
     */
    public static function proxyTest()
    {
        $girl = new \Structure\Proxy\SchoolGirl('妞妞');
        $proxy = new \Structure\Proxy\Proxy($girl);
        $proxy->giveDolls();
        $proxy->giveFlowers();
        $proxy->giveChocolate();
    }
}