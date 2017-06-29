<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/29
 * Time: 8:57
 */

namespace Util;


class Helper
{
    /**
     * 工厂模式
     */
    public static function factory()
    {
        $db = \Factory\Factory::createDatabase('MySQL');
        $db->connect();
        return $db;
    }

    /**
     * 单例模式
     */
    public static function singleton()
    {
        $db1 = \Singleton\Database::getInstance();
        $db2 = \Singleton\Database::getInstance();
        $db1->ins_time = 2;
        echo "</br>";
        echo $db2->ins_time;//echo 2;
    }

    /**
     * 注册器模式
     */
    public static function register()
    {
        \Register\Register::set('db', \Factory\Factory::createDatabase('MySQL'));
        $db = \Register\Register::get('db');
        $db->connect();
    }

    public static function adapter()
    {
        $db = new \Adapter\MySQLiAdapter();//只需要在这一步进行适配,选取可用的类
        $db->connect('localhost', 'root', '123', 'test');
        $db->query('show databases');
        $db->close();
    }

    /**
     * 策略模式
     */
    public static function strategy()
    {
        $lessions[] = new \Strategy\Seminar(4, new \Strategy\TimedCostStrategy());
        $lessions[] = new \Strategy\Lecture(4, new \Strategy\FixedCostStrategy());

        foreach ($lessions as $lession) {
            print 'lesson cost: ' . $lession->cost();
            print 'charge type: ' . $lession->chargeType() . "\r\n";
        }
    }


    public static function orm()
    {
        $user = new \ORM\User(1);
        $user->setphone(87878);
    }

    /**
     * 观察者模式
     */
    public static function observer()
    {
        $event = new \Observer\Event();
        $event->addObserver(new \Observer\Observer1());
        $event->addObserver(new \Observer\Observer2());
        $event->trigger();

    }

    /**
     * 不使用原型模式耗费时间: 0.062000036239624
     * 使用原型模式耗费时间: 0.038000106811523
     * 原型模式
     */
    public static function prototype()
    {
        /*不使用原型模式*/
        $time = new \Util\Time();
        $canvas1 = new \Prototype\Canvas();
        $canvas1->init();
        $canvas1->rect(20, 60, 90, 120);
//    $canvas1->draw();
        $canvas2 = new \Prototype\Canvas();
        $canvas2->init();
        $canvas2->rect(200, 600, 90, 120);
//    $canvas2->draw();
        echo '不使用原型模式耗费时间: ';
        $time->cost();

        /*使用原型模式*/

        /*创建原型*/
        $canvas_prototype = new \Prototype\Canvas();
        $canvas_prototype->init();

        /*复制原型*/
        $canvas1 = clone $canvas_prototype;
        $canvas1->rect(20, 60, 90, 120);
//    $canvas1->draw();
        $canvas2 = clone $canvas_prototype;
        $canvas2->rect(200, 600, 90, 120);
//    $canvas2->draw();
        echo '使用原型模式耗费时间: ';
        $time->cost();
    }

    /**
     * 装饰器模式
     */
    public static function decorator()
    {
        $time = new \Util\Time();
        $canvas1 = new \Decorator\Canvas();
        $canvas1->init(20, 20);
        $canvas1->rect(5, 16, 9, 12);
        $canvas1->addDecorator(new \Decorator\ColorDecorator());
        $canvas1->addDecorator(new \Decorator\FontSizeDecorator(50));
        $canvas1->draw();
        $time->cost();
    }

    /**
     * 迭代器
     */
    public static function iterator()
    {
        $users = new \Iterator\UserIterator();
        foreach ($users as $user) {
            var_dump($user->getId());
        }
    }

    /**
     * 代理模式
     */
    public static function proxy()
    {
        $user = new \Proxy\UserProxy();
        $user->getUserName(1);
        $user->setUserName(1, 'test');
    }
}