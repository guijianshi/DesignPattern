<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 8:41
 */

namespace Action\Strategy;


class CashRebate extends CashSuper
{
    private $moneyRebate;

    /**
     * CashRebate constructor.
     * @param $money_rebate
     */
    public function __construct(string $moneyRebate)
    {
        $this->moneyRebate = (float) $moneyRebate;
    }


    public function acceptionCash(float $money)
    {
        return $money * $this->moneyRebate;
    }

}