<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 8:59
 */
define('DIR', __DIR__);
include_once DIR . '/Loader.php';
spl_autoload_register('\\Loader\\Loader::autoload');

/**
 * 工厂模式
 */
function factory()
{
    $db = \Factory\Factory::createDatabase('MySQL');
    $db->connect();
    return $db;
}

/**
 * 单例模式
 */
function singleton()
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
function register()
{
    \Register\Register::set('db', \Factory\Factory::createDatabase('MySQL'));
    $db = \Register\Register::get('db');
    $db->connect();
}

function adapter()
{
    $db = new \Adapter\MySQLiAdapter();//只需要在这一步进行适配,选取可用的类
    $db->connect('localhost', 'root', '123', 'test');
    $db->query('show databases');
    $db->close();
}

/**
 * 策略模式
 */
function strategy()
{
    $lessions[] = new \Strategy\Seminar(4, new \Strategy\TimedCostStrategy());
    $lessions[] = new \Strategy\Lecture(4, new \Strategy\FixedCostStrategy());

    foreach ($lessions as $lession) {
        print 'lesson cost: ' . $lession->cost();
        print 'charge type: ' . $lession->chargeType() . "\r\n";
    }
}


