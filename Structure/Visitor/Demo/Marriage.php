<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/9/1
 * Time: 13:46
 */

namespace Structure\Visitor\Demo;


class Marriage extends Action
{
    public function getManConlusion(Man $man)
    {
        printf('%s %s时,婚姻是爱情的坟墓,孩子是感情的羁绊<br/>', get_class($man), self::class);
    }

    public function getWoManConlusion(Woman $woman)
    {
        printf('%s %s时,婚姻是爱情的胜利,孩子是爱情的结晶<br>', get_class($woman), self::class);
    }

}