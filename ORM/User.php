<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/21
 * Time: 16:54
 */

namespace ORM;


use Adapter\MySQLiAdapter;

class User
{
    public $id;

    public $username;

    private $password;

    public $phone;

    private $_db;

    public function __construct($id = 0)
    {
        $this->_db = new MySQLiAdapter();
        $this->_db->connect('localhost', 'root', '123', 'blog');
        $res = $this->_db->query('SELECT * FROM users WHERE id = ' . $id . ' LIMIT 1');
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->phone = $data['phone'];

    }

    function __destruct()
    {

        $this->_db->query("UPDATE users SET username = '{$this->username}', password = '{$this->password}',
            phone = '{$this->phone}' WHERE id = {$this->id} LIMIT 1
        ");


    }


    /**
     * @return mixed
     */
    public function getphone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}