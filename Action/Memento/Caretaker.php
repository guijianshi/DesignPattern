<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 15:02
 */

namespace Action\Memento;


class Caretaker
{
    private $memento;

    /**
     * @return Memento
     */
    public function getMemento()
    {
        return $this->memento;
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }


}