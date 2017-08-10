<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 11:13
 */

namespace Action\Decorator\Demo;


class Sneaker extends Finery
{
    public function show()
    {
        echo '运动鞋', '<br>';
        parent::show();
    }

}