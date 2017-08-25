<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:09
 */

namespace Structure\Facade;


class NationalDebt
{
    public function sell()
    {
        echo '国债卖出', '<br>';
    }

    public function buy()
    {
        echo '国债买入', '<br>';
    }
}