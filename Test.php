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
use \Structure\Composite\Demo\{ConcreteCompany,HRDepartment, FinanceDepartment };
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

    public static function factoryTest()
    {
        /*生产法拉利*/
        $ferrariFactory = new \Create\Factory\FerrariFactory();
        $ferrariA = $ferrariFactory->createCar();
        $ferrariA->run();
        $ferrariB = $ferrariFactory->createCar();
        $ferrariB->run();

        /*生产大众*/
        $volkswagenFactory = new \Create\Factory\VolkswagenFactory();
        $volkswagen = $volkswagenFactory->createCar();
        $volkswagen->run();
    }

    public static function prototypeTest()
    {
        $a = new \Create\Prototype\Resume('鬼剑士');
        $a->setPersonalInfo('男', '12');
        $a->setWorkExperience('2016-2016', '浙江奥翔');
        $b = $a->cloneSelf();
        $b->setPersonalInfo('男', '12');
        $b->setWorkExperience('2016-2017', '杭州瑞普');
        $a->dispaly();
        $b->dispaly();

        $c = new \Create\Prototype\Demo\Resume('鬼剑士');
        $c->setPersonalInfo('男', '12');
        $c->setWorkExperience('2016-2016', '浙江奥翔');
        $d = $c->cloneSelf();
        $d->setPersonalInfo('男', '16');
        $d->setWorkExperience('2016-2017', '杭州瑞普');
        $c->display();
        $d->display();
    }

    public static function templateTest()
    {
        $a = new \Structure\Template\Demo\TestPaperA();
        $a->testQuestion1();

        $b = new \Structure\Template\Demo\TestPaperB();
        $b->testQuestion1();

        $c = new \Structure\Template\ConcreteClassA();
        $c->templateMethod();

        $d = new \Structure\Template\ConcreteClassB();
        $d->templateMethod();
    }

    public static function facadeTest()
    {
        $fund = new \Structure\Facade\Fund();
        $fund->buyFund();
        $fund->sellFund();
    }

    public static function builderTest()
    {
        $pbThin = new \Create\Builder\PersonDirector(new \Create\Builder\PersonThinBuilder());
        $pbThin->createPerson();

        $pbfat = new \Create\Builder\PersonDirector(new \Create\Builder\PersonFatBuilder());
        $pbfat->createPerson();
    }

    public static function observerTest()
    {
        $user = new \Action\Observer\Demo\User();
        $user->attach(new \Action\Observer\Demo\UserObserver());
        $user->a = 1;
        $user->a = 3;
    }

    public static function observer2Test()
    {
        $boss = new \Action\Observer\Boss();
        $colleague1 = new \Action\Observer\StockObserver($boss);
        $colleague2 = new \Action\Observer\NBAObserver($boss);
        $boss->notify();
    }

    public static function abstractFactoryTest()
    {
        $factory = new \Create\AbstractFactroy\MySQLUserFactory();
        $data = $factory->createUser();

        $id = $factory->createDepartment();
        $id->insert(1);
        $id->find(1);
    }

    public static function stateTest()
    {
        $c = new \Action\State\Context(new \Action\State\ConcreteStateA());
        $c->Request();
        $c->Request();
        $c->Request();
        $c->Request();
        $c->Request();
    }

    public static function stateDemoTest()
    {
        $work = new \Action\State\Demo\Work();
        $work->setHour(10);
        $work->writeProgram();
        $work->setHour(12.5);
        $work->writeProgram();
        $work->setHour(14);
        $work->writeProgram();
    }

    public static function adapterTest()
    {
        $playA = new \Structure\Adapter\Forwards('詹姆斯');
        $playA->attack();
        $playB = new \Structure\Adapter\Translator('易建联');
        $playB->attack();
        $playC = new \Structure\Adapter\Guards('麦迪');
        $playC->attack();
    }

    public static function mementoTest()
    {
        $origin = new \Action\Memento\Originator();
        $origin->setState('On');
        $origin->show();
        $care = new \Action\Memento\Caretaker();
        $care->setMemento($origin->createMemento());

        $origin->setState('Off');
        $origin->show();
        $origin->setMemento($care->getMemento());
        $origin->show();
    }

    public static function compositeTest()
    {
        $root = new \Structure\Composite\Composite('root');
        $root->add(new \Structure\Composite\Leaf('Leaf A'));
        $root->add(new \Structure\Composite\Leaf('Leaf B'));

        $l = new \Structure\Composite\Composite('root_l');
        $l->add(new \Structure\Composite\Leaf('L A'));
        $l->add(new \Structure\Composite\Leaf('L B'));

        $root->add($l);

        $r = new \Structure\Composite\Composite('root_r');
        $r->add(new \Structure\Composite\Leaf('r A'));
        $r->add(new \Structure\Composite\Leaf('r B'));

        $root->add($r);

        $ll = new \Structure\Composite\Composite('root_ll');
        $ll->add(new \Structure\Composite\Leaf('LL A'));
        $ll->add(new \Structure\Composite\Leaf('LL B'));

        $l->add($ll);
        $l->remove($ll);

        $root->display(1);
    }

    public static function compositeDemoTest()
    {
        $root = new ConcreteCompany('总公司');
        $root->add(new HRDepartment('总公司的人事部门'));
        $root->add(new FinanceDepartment('总公司的财务部门'));

        $comp1 = new ConcreteCompany('北方分公司');
        $comp1->add(new HRDepartment('北方分公司人事部门'));
        $comp1->add(new FinanceDepartment('北方分公司财务部门'));
        $root->add($comp1);

        $comp1_1 = new ConcreteCompany('帝都办事处');
        $comp1_1->add(new HRDepartment('帝都办事处人事部门'));
        $comp1_1->add(new FinanceDepartment('帝都办事处财务部门'));
        $comp1->add($comp1_1);

        $comp1_2 = new ConcreteCompany('天津办事处');
        $comp1_2->add(new HRDepartment('天津办事处人事部门'));
        $comp1_2->add(new FinanceDepartment('天津办事处财务部门'));
        $comp1->add($comp1_2);

        $comp2 = new ConcreteCompany('南方分公司');
        $comp2->add(new HRDepartment('南方分公司人事部门'));
        $comp2->add(new FinanceDepartment('南方分公司财务部门'));
        $root->add($comp2);

        echo '公司架构图<br/>';
        $root->display(1);

        echo '职责<br/>';
        $root->lineOfDuty();
    }

    public static function bridgeTest()
    {
        $ab = new \Structure\Bridge\Abstraction();
        $ab->setImplementor(new \Structure\Bridge\ConcreteImplementorA());
        $ab->operation();

        $ab->setImplementor(new \Structure\Bridge\ConcreteImplementorB());
        $ab->operation();
    }

    /**
     * 测试桥连模式Demo
     */
    public static function bridgeDemoTest()
    {
        $mi = new \Structure\Bridge\Demo\HandsetBrandMi();
        $mi->setSoft(new \Structure\Bridge\Demo\HandsetGame());
        $mi->run();

        $nokia = new \Structure\Bridge\Demo\HandsetBrandNokia();
        $nokia->setSoft(new \Structure\Bridge\Demo\HandsetAdressList());
        $nokia->run();
    }

    public static function commondTest()
    {
        $receiver = new \Action\Commond\Receiver();
        $commond = new \Action\Commond\ConcreteCommond($receiver);
        $invoker = new \Action\Commond\Invoker();

        $invoker->setCommond($commond);
        $invoker->executeCommond();
    }

    public static function commondDemoTest()
    {
        $cook = new \Action\Commond\Demo\Barbecuer();
        $bakeMuttonCommond1 = new \Action\Commond\Demo\BakeMuttonCommond($cook);
        $bakeMuttonCommond2 = new \Action\Commond\Demo\BakeMuttonCommond($cook);
        $bakeChickenWingCommond1 = new \Action\Commond\Demo\BakeChickenWingCommond($cook);

        $waiter = new \Action\Commond\Demo\Waiter();
        $waiter->setOrder($bakeMuttonCommond1);
        $waiter->setOrder($bakeMuttonCommond2);
        $waiter->setOrder($bakeChickenWingCommond1);
        $waiter->notify();
    }

    public static function ChainOfResponsibilitiesTest()
    {
        $hander1 = new \Action\ChainOfResponsibilities\ConcreteHandler1();
        $hander2 = new \Action\ChainOfResponsibilities\ConcreteHandler2();
        $hander3 = new \Action\ChainOfResponsibilities\ConcreteHandler3();
        $hander1->setSuccessor($hander2);
        $hander2->setSuccessor($hander3);
        $requests = [2,8,10,18,20,25,29,31];
        foreach ($requests as $v) {
            $hander1->handleRequest($v);
        }
    }

    public static function ChainOfResponsibilitiesDemoTest()
    {
        $xiao = new \Action\ChainOfResponsibilities\Demo\CommonManager('肖肖');
        $wang = new \Action\ChainOfResponsibilities\Demo\Majordomo('老王');
        $lou = new \Action\ChainOfResponsibilities\Demo\GeneralManager('楼总');
        $xiao->setSuperior($wang);
        $wang->setSuperior($lou);

        $reuqest1 = new \Action\ChainOfResponsibilities\Demo\Request();
        $reuqest1->setRequestType('请假');
        $reuqest1->setRequestContent('小林请假');
        $reuqest1->setNumber(2);
        $xiao->requestApplications($reuqest1);

        $reuqest2 = new \Action\ChainOfResponsibilities\Demo\Request();
        $reuqest2->setRequestType('加薪');
        $reuqest2->setRequestContent('小胡申请加薪');
        $reuqest2->setNumber(800);
        $xiao->requestApplications($reuqest2);
    }

}