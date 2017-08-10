<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 11:27
 */

namespace Structure\Proxy;


class Proxy implements IGiveGift
{

    protected $pursuit;
    /**
     * Proxy constructor.
     * @param $mm
     */
    public function __construct(SchoolGirl $girl)
    {
        $this->pursuit = new Pursuit($girl);
    }


    function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    function giveFlowers()
    {
        $this->pursuit->giveFlowers();
    }

    function giveChocolate()
    {
        $this->pursuit->giveChocolate();
    }

}