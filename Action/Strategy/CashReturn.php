<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 8:43
 */

namespace Action\Strategy;


class CashReturn extends CashSuper
{
    private $money_condition;

    private $money_return;

    /**
     * CashReturn constructor.
     * @param $money_condition
     * @param $money_return
     */
    public function __construct(string $money_condition, string $money_return)
    {
        $this->money_condition = (float) $money_condition;
        $this->money_return = (float) $money_return;
    }


    public function acceptionCash(float $money)
    {

        return ($money -  floor($money / $this->money_condition) * $this->money_return);
    }

}