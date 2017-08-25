<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 13:30
 */

namespace Action\State\Demo;


class AfterNoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 17) {
            printf('当前时间:%d 精神抖擞写代码<br/>', $work->getHour());
        } else {
            $work->setState(new AfterNoonState());
            $work->writeProgram();
        }
    }


}