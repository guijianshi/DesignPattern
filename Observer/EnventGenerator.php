<?php
/**
 * Created by PhpStorm.
 * User: lyy15
 * Date: 2017/6/25
 * Time: 22:59
 */

namespace Observer;


abstract class EnventGenerator
{
    protected $observers = [];

    /*添加观察者*/
    public function addObserver(Oberser $oberser)
    {
        $this->observers[] = $oberser;
    }

    /*通知观察者*/
    public function nodify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}