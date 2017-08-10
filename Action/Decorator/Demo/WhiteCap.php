<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 11:15
 */

namespace Action\Decorator\Demo;


class WhiteCap extends Finery
{
    public function show()
    {
        echo '白帽子', '<br>';
        parent::show();
    }

}