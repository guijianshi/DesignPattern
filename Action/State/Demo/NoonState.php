<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 13:29
 */

namespace Action\State\Demo;


class NoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 13) {
            printf('当前时间:%d 饿了犯困,午休<br/>', $work->getHour());
        } else {
            $work->setState(new AfterNoonState());
            $work->writeProgram();
        }
    }

}