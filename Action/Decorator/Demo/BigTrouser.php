<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 9:52
 */

namespace Action\Decorator\Demo;


class BigTrouser extends Finery
{
    public function show()
    {
        echo '跨裤', '<br>';
        parent::show();
    }

}