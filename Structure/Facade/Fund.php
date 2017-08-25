<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/14
 * Time: 14:05
 */

namespace Structure\Facade;


class Fund
{
    protected $stock1;
    protected $stock2;
    protected $nationalDebt;

    /**
     * Fund constructor.
     * @param $stock1
     * @param $stock2
     * @param $nationalDebt
     */
    public function __construct()
    {
        $this->stock1 = new Stock1();
        $this->stock2 = new Stock2();
        $this->nationalDebt = new NationalDebt();
    }

    public function buyFund()
    {
        $this->stock1->buy();
        $this->stock2->buy();
        $this->nationalDebt->buy();
    }

    public function sellFund()
    {
        $this->stock1->sell();
        $this->stock2->sell();
        $this->nationalDebt->sell();
    }

}