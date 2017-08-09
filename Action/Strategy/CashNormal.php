<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 8:40
 */

namespace Action\Strategy;


class CashNormal extends CashSuper
{
    public function acceptionCash(float $money)
    {
        return $money;
    }

}