<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/8
 * Time: 14:59
 */

define('DIR', __DIR__);
include_once DIR . '/Loader.php';
spl_autoload_register('\\Loader\\Loader::autoload');

//Test::SingleFactoryTest();
//Test::factoryTest();
//Test::prototypeTest();
//Test::templateTest();
//Test::observerTest();
//Test::observer2Test();
//Test::abstractFactoryTest();
//Test::stateTest();
//Test::stateDemoTest();
//Test::adapterTest();
//Test::mementoTest();
//Test::compositeTest();
//Test::compositeDemoTest();
//Test::singletonTest();
//Test::bridgeTest();
//Test::bridgeDemoTest();
//Test::commondTest();
//Test::commondDemoTest();
Test::Test2();