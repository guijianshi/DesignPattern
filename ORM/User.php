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

    public $mobile;

    private $db;

    public function __construct($id)
    {
        $this->db = new MySQLiAdapter();
        $this->db->connect('localhost','root','123','test');
        $res = $this->db->query('SELECT * FROM user WHERE id = '.$id);
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->mobile = $data['mobile'];

    }

    function __destruct()
    {
        $this->db->query("UPDATA user SET username = '{$this->username}', password = '{$this->password}',
        mobile = '{$this->mobile}'
        ");
    }


    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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