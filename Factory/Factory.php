<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:34
 */

namespace Factory;


class Factory
{
    static function createDatabase($data_type)
    {
        switch ($data_type){
            case 'MySQL':
                $db = new Mysql();
                break;
            case 'PostGreSQL':
                $db = new PostgreSQL();
                break;
            default:
                throw new \Exception('数据库类型不支持');
        }
        return $db;

    }
}