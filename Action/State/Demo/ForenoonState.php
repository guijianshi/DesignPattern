<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/17
 * Time: 13:25
 */

namespace Action\State\Demo;


class ForenoonState extends State
{
    public function writeProgram(Work $work)
    {
        if ($work->getHour() < 12) {
            printf('当前时间:%d 上午工作精神百倍<br/>', $work->getHour());
        } else {
            $work->setState(new NoonState());
            $work->writeProgram();
        }
    }

}