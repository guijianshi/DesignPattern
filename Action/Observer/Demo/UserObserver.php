<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 15:05
 */

namespace Action\Observer\Demo;


use SplSubject;

class UserObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . '已经发生更新', '<br>';
    }

}