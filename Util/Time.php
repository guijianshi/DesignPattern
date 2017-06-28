<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/6/28
 * Time: 10:23
 */

namespace Util;


class Time
{
    protected $time;

    public function __construct()
    {
        $this->time = $this->getMicroTime();
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
    /**
     * 获得微妙级别时间
     * @return float
     */
    public  function getMicroTime(): float
    {
        list($micro, $time) = explode(' ',microtime());
        return $time + $micro;
    }

    public function cost(string $string = '总共花费: ')
    {
        $now = $this->getMicroTime();
        echo $string.($now - $this->getTime())."s<br/>";
        $this->time = $now;
    }



}