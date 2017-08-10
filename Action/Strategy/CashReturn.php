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
    private $moneyCondition;

    private $moneyReturn;

    /**
     * CashReturn constructor.
     * @param $money_condition
     * @param $money_return
     */
    public function __construct(string $moneyCondition, string $moneyReturn)
    {
        $this->moneyCondition = (float) $moneyCondition;
        $this->moneyReturn = (float) $moneyReturn;
    }


    public function acceptionCash(float $money)
    {

        return ($money -  floor($money / $this->moneyCondition) * $this->moneyReturn);
    }

}