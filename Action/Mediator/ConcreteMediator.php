<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 8:41
 */

namespace Action\Mediator;


class ConcreteMediator extends Mediator
{

    protected $colleague1;

    protected $colleague2;

    /**
     * @param Colleague $colleague1
     */
    public function setColleague1(Colleague $colleague1)
    {
        $this->colleague1 = $colleague1;
    }

    /**
     * @param Colleague $colleague2
     */
    public function setColleague2(Colleague $colleague2)
    {
        $this->colleague2 = $colleague2;
    }



    public function send(string $message, Colleague $colleague)
    {
        if ($colleague == $this->colleague1) {
            $this->colleague2->notify($message);
        } else {
            $this->colleague1->notify($message);
        }
    }
}