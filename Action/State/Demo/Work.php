<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 13:31
 */

namespace Action\State\Demo;


class Work
{

    private $current;

    private $hour;

    private $finsh;
    /**
     * Work constructor.
     * @param $current
     */
    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return bool
     */
    public function getFinsh()
    {
        return $this->finsh;
    }

    /**
     * @param bool $finsh
     */
    public function setFinsh($finsh)
    {
        $this->finsh = $finsh;
    }

    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function writeProgram()
    {
        $this->current->writeProgram($this);
    }



}