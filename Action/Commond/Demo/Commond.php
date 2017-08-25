<?php
/**
 * Created by PhpStorm.
 * User: lin
 * Date: 2017/8/23
 * Time: 13:28
 */

namespace Action\Commond\Demo;

//命令抽象类
abstract class Commond
{
    protected $receiver;

    /**
     * Commond constructor.
     * @param Barbecuer $receiver
     */
    public function __construct(Barbecuer $receiver)
    {
        $this->receiver = $receiver;
    }

    public abstract function executeCommond();

    public abstract function __toString();

}