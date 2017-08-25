<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 15:54
 */

namespace Action\Observer;


interface Subject
{
    public function notify();
}