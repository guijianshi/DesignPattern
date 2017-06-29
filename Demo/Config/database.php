<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/29
 * Time: 9:17
 */
$config = array(
    'master' => array(
        'type' => 'MySQL',
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => '123',
        'dbname' => 'test'
    ),
    'slave' => array(

        'slave1' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '123',
            'dbname' => 'test'
        ),

        'slave2' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '123',
            'dbname' => 'test'
        ),
    ),
);