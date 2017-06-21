<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 16:19
 */

namespace Adapter;


class PDOAdapter implements Database
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $this->conn = new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }
}