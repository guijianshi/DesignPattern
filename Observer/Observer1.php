<?php
/**
 * Created by PhpStorm.
 * User: lyy15
 * Date: 2017/6/25
 * Time: 23:05
 */

namespace Observer;


class Observer1 implements Oberser
{
    public function update($event_info = null)
    {
        echo '执行逻辑1';
    }
}