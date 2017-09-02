<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 9:49
 */

namespace Structure\Visitor\Demo;


class Success extends Action
{
    public function getManConlusion(Man $man)
    {
        printf('%s %s时,背后多半有一个伟大的女人<br>', get_class($man), self::class);
    }

    public function getWoManConlusion(Woman $woman)
    {
        printf('%s %s时,背后多半有一个失败的男人<br>', get_class($woman), self::class);
    }

}