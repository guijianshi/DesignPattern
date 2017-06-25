<?php
/**
 * Created by PhpStorm.
 * User: lyy15
 * Date: 2017/6/25
 * Time: 22:53
 */

namespace Observer;


class Event extends EnventGenerator
{
    public function trigger()
    {
        echo 'Event</<br>';
        $this->nodify();

    }
}