<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 16:20
 */

namespace Adapter;


interface Database
{
    public function connect($host, $user, $password, $dbname);
    public function query($sql);
    public function close();
}