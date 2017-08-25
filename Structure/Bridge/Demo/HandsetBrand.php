<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 9:05
 */

namespace Structure\Bridge\Demo;


abstract class HandsetBrand
{
    protected $soft;

    /**
     * @param HandsetSoft $soft
     */
    public function setSoft(HandsetSoft $soft)
    {
        $this->soft = $soft;
    }

    public abstract function run();

}