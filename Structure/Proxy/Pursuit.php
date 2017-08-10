<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/10
 * Time: 11:32
 */

namespace Structure\Proxy;


class Pursuit implements IGiveGift
{
    public $schoolGirl;

    /**
     * Pursuit constructor.
     * @param SchoolGirl $schoolGirl
     */
    public function __construct(SchoolGirl $schoolGirl)
    {
        $this->schoolGirl = $schoolGirl;
    }


    function giveDolls()
    {
        echo $this->schoolGirl->getName() . ',送你玩偶', '<br>';
    }

    function giveFlowers()
    {
        echo $this->schoolGirl->getName() . ',送你鲜花', '<br>';
    }

    function giveChocolate()
    {
        echo $this->schoolGirl->getName() . ',送你巧克力', '<br>';
    }


}