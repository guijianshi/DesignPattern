<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 14:54
 */

namespace Proxy;


interface UserProxyInterface
{
    public function getUserName($id);

    public function setUserName($id, $username);
}