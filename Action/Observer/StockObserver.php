<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 15:48
 */

namespace Action\Observer;


class StockObserver
{
    private $sub;

    /**
     * StockObserver constructor.
     * @param $sub
     */
    public function __construct(Subject $sub)
    {
        $this->sub = $sub;
    }

    public function closeStockMarket()
    {
        printf("%s%s关闭股票行情,继续工作!<br>", $this->sub->subjectState, get_class($this->sub));
    }

}