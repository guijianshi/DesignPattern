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

Test::SingleFactoryTest();