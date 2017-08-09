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
    private $money_rebate;

    /**
     * CashRebate constructor.
     * @param $money_rebate
     */
    public function __construct(string $money_rebate)
    {
        $this->money_rebate = (float) $money_rebate;
    }


    public function acceptionCash(float $money)
    {
        return $money * $this->money_rebate;
    }

}