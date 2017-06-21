<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 16:18
 */

namespace Adapter;

/*mysql 扩展在php7当中已经全面弃用,用安全性更高的mysqli代替*/
class MySQLiAdapter implements Database
{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        $this->conn = mysqli_connect($host, $user, $password, $dbname);
        return $this->conn;
    }
    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
    public function close()
    {
        return mysqli_close($this->conn);
    }
}