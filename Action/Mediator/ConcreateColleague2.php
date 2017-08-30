<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 8:48
 */

namespace Action\Mediator;


class ConcreateColleague2 extends Colleague
{
    public function send(string $msg)
    {
        $this->mediator->send($msg, $this);
    }

    public function notify($msg)
    {
        echo '同事2得到消息:' . $msg . '<br/>';
    }
}