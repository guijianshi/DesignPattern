<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:30
 */

namespace Create\Builder;


class PersonFatBuilder extends PersonBuilder
{
    public function buildHead()
    {
        echo '胖子的头', '<br>';
    }

    public function buildBody()
    {
        echo '胖子的身体', '<br>';
    }

    public function buildArmLeft()
    {
        echo '胖子的左手', '<br>';
    }

    public function buildArmRight()
    {
        echo '胖子的右手', '<br>';
    }

    public function buildLegLeft()
    {
        echo '胖子的左腿', '<br>';
    }

    public function buildLegRight()
    {
        echo '胖子的右腿', '<br>';
    }

}