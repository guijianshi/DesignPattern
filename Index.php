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

//$config = new \Demo\Config\Config(__DIR__ . '/Demo/Config');
//var_dump($config['controller']);
\Util\Helper::observer();

