<?php
/**
 * Created by PhpStorm.
 * User: lyy15
 * Date: 2017/6/25
 * Time: 22:58
 */

namespace Observer;


interface Oberser
{
    public function update($event_info = null);
}