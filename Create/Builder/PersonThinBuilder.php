<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:26
 */

namespace Create\Builder;


class PersonThinBuilder extends PersonBuilder
{
    public function buildHead()
    {
        echo '瘦人的头', '<br>';
    }

    public function buildBody()
    {
        echo '瘦人的身体', '<br>';
    }

    public function buildArmLeft()
    {
        echo '瘦人的左手', '<br>';
    }

    public function buildArmRight()
    {
        echo '瘦人的右手', '<br>';
    }

    public function buildLegLeft()
    {
        echo '瘦人的左腿', '<br>';
    }

    public function buildLegRight()
    {
        echo '瘦人的右腿', '<br>';
    }

}