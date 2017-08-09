<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/9
 * Time: 8:33
 */

namespace Action\Strategy;


class CashContext
{
    private $cs;

    public function __construct(string $type)
    {
        switch ($type)
        {
            case "正常收费":
                $this->cs = new CashNormal();
                break;
            case '满300返100':
                $this->cs = new CashReturn("300", "100");
                break;
            case '打8折':
                $this->cs = new CashRebate("0.8");
                break;
            default:
                $this->cs = new CashNormal();
                break;
        }
    }

    public function getResult(float $money)
    {
        return $this->cs->acceptionCash($money);
    }
}