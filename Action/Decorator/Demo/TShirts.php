<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 9:51
 */

namespace Action\Decorator\Demo;


class TShirts extends Finery
{
    public function show()
    {
        echo 'TShirts', '<br>';
        parent::show();
    }
}