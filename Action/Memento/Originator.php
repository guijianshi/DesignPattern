<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 14:51
 */

namespace Action\Memento;


class Originator
{
    private $state;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function setMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    public function show()
    {
        printf('state = %s<br/>', $this->state);
    }
}