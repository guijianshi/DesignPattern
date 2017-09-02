<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 9:57
 */

namespace Structure\Visitor\Demo;


class Failing extends Action
{
    public function getManConlusion(Man $man)
    {
        printf('%s %s时,背后多半有一个更失败的女人', get_class($man), self::class);
    }

    public function getWoManConlusion(Woman $woman)
    {
        printf('%s %s时,背后多半有一个成功的男人', get_class($woman), self::class);
    }

}