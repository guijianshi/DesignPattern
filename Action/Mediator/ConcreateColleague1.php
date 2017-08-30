<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/29
 * Time: 8:46
 */

namespace Action\Mediator;


class ConcreateColleague1 extends Colleague
{
    public function send(string $msg)
    {
        $this->mediator->send($msg, $this);
    }

    public function notify(string $msg)
    {
        echo '同事1得到消息:' . $msg . '<br/>';
    }
}