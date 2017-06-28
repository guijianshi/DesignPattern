<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 14:01
 */

namespace Iterator;


use Factory\Factory;

class UserIterator implements \Iterator
{
    protected $ids;

    protected $index;

    protected $data = [];

    /**
     * UserIterator constructor.
     * @param $ids
     */
    public function __construct()
    {
        /* @var $db \Adapter\MySQLiAdapter */
        $db = Factory::createDatabase();
        $db->connect('localhost', 'root', '123', 'blog');
        $res = $db->query('SELECT id FROM users ORDER BY id');
        $this->ids = $res->fetch_all(MYSQLI_ASSOC);

    }


    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function rewind()
    {
        $this->index = 0;
    }

}