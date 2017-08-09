<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 8:38
 */

namespace Action\Strategy;


abstract class CashSuper
{
    public abstract function acceptionCash(float $money);
}