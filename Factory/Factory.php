<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 15:34
 */

namespace Factory;


use Adapter\MySQLiAdapter;
use ORM\User;
use Register\Register;

class Factory
{
    /**
     * @param string $data_type
     * @return MySQLiAdapter|PostgreSQL
     * @throws \Exception
     */
    public static function createDatabase($data_type = 'MySQL')
    {
        switch ($data_type) {
            case 'MySQL':
                $db = new MySQLiAdapter();
                break;
            case 'PostGreSQL':
                $db = new PostgreSQL();
                break;
            default:
                throw new \Exception('数据库类型不支持');
        }
        return $db;
    }

    /**
     * @param $id
     * @return mixed|User
     */
    public static function getUser($id)
    {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }
}