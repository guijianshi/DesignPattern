<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 14:56
 */

namespace Proxy;


use Factory\Factory;

class UserProxy implements UserProxyInterface
{
    public function getUserName($id)
    {
        $db = Factory::createDatabase('slave');
        $db->query('SELECT username FROM users WHERE id = ' . $id);
    }

    public function setUserName($id, $username)
    {
        $db = Factory::createDatabase('master');
        $db->query("UPDATE user SET username = '{$username}'");
    }

}